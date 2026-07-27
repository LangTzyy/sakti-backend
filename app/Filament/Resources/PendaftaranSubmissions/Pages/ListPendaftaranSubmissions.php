<?php

namespace App\Filament\Resources\PendaftaranSubmissions\Pages;

use App\Filament\Resources\PendaftaranSubmissions\PendaftaranSubmissionResource;
use Filament\Resources\Pages\ListRecords;

class ListPendaftaranSubmissions extends ListRecords
{
    protected static string $resource = PendaftaranSubmissionResource::class;

    protected function getHeaderActions(): array
    {
        // Sengaja kosong — submission masuk lewat form publik, bukan input manual.
        return [];
    }
}
