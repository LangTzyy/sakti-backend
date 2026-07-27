<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\PendaftaranSubmission;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SubmissionController extends Controller
{
    /**
     * Cek header X-Api-Secret cocok sama INTERNAL_API_SECRET di .env.
     * Endpoint ini cuma dipanggil server-side dari Next.js, jadi shared
     * secret sederhana ini cukup — bukan endpoint publik yang diakses browser.
     */
    private function checkSecret(Request $request): ?JsonResponse
    {
        $expected = config('services.internal_api.secret');

        if (!$expected || $request->header('X-Api-Secret') !== $expected) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return null;
    }

    public function storeContact(Request $request)
    {
        if ($unauthorized = $this->checkSecret($request)) {
            return $unauthorized;
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $submission = ContactSubmission::create($validated);

        return response()->json(['success' => true, 'id' => $submission->id], 201);
    }

    public function storePendaftaran(Request $request)
    {
        if ($unauthorized = $this->checkSecret($request)) {
            return $unauthorized;
        }

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'ttl' => 'required|string|max:255',
            'email' => 'required|email',
            'nim' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:255',
            'motivasi' => 'required|string',
            'foto_ktm_url' => 'required|string',
            'cv_url' => 'required|string',
            'sertifikat_url' => 'required|string',
        ]);

        $submission = PendaftaranSubmission::create($validated);

        return response()->json(['success' => true, 'id' => $submission->id], 201);
    }
}
