<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Tech Summit 2026',
            'category' => 'Seminar',
            'start_date' => '2026-03-12',
            'end_date' => null,
            'description' => 'Konferensi teknologi terbesar tahun ini, menghadirkan pembicara dari Google & GoTo membahas masa depan AI.',
        ]);

        Event::create([
            'title' => 'Code Camp : Zero to Hero',
            'category' => 'Bootcamp',
            'start_date' => '2026-05-15',
            'end_date' => '2026-05-17',
            'description' => 'Pelatihan intensif 3 hari 2 malam. Fokus pada fundamental algoritma dan clean code untuk mahasiswa baru.',
        ]);

        Event::create([
            'title' => 'Hackathon SAKTI',
            'category' => 'Kompetisi',
            'start_date' => '2026-08-20',
            'end_date' => null,
            'description' => 'Tantangan coding 24 jam non-stop. Bangun solusi cerdas untuk permasalahan Smart City.',
        ]);

        Event::create([
            'title' => 'TI Festival & Expo',
            'category' => 'Pameran',
            'start_date' => '2026-11-10',
            'end_date' => null,
            'description' => 'Puncak apresiasi karya mahasiswa. Pameran tugas akhir, bazar startup, dan malam penganugerahan.',
        ]);
    }
}
