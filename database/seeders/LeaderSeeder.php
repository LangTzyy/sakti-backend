<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leader;

class LeaderSeeder extends Seeder
{
    public function run(): void
    {
        Leader::create([
            'role' => 'Ketua Umum',
            'name' => 'Gilang Dwi Hermawan',
            'image' => null,
            'visi' => 'Mewujudkan organisasi terbuka dan profesional sebagai ruang kolaborasi mahasiswa TI dalam Pengembangan akademik dan minat bakat',
            'misi' => [
                'Menghadirkan suasana organisasi yang terbuka dan nyaman bagi semua anggota untuk tumbuh bersama',
                'Menjalakan program kerja yang nyata, kolaboratif, dan berdampak, baik dalam bidang akademik maupun non-akademik',
                'Menjaga nilai profesionalisme dan tanggung jawab dalam setiap kegiatan organisasi',
                'Bersinergi dengan program studi Teknik Informatika untuk mendukung peningkatan mutu akademik, kegiatan mahasiswa dan reputasi prodi secara internal maupun eksternal',
            ],
        ]);

        Leader::create([
            'role' => 'Wakil Ketua',
            'name' => 'Fika Aulia',
            'image' => null,
        ]);

        Leader::create([
            'role' => 'Pembina Organisasi',
            'name' => 'Dr. Suastika Yulia Riska, S.Kom., M.Kom.',
            'image' => null,
        ]);
    }
}