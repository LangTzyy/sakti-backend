<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Demissioner;

class DemissionerSeeder extends Seeder
{
    public function run(): void
    {
        $demissioners = [
            ['name' => 'Mu`jizah Al Mu`alifah', 'role' => 'Ketua 2021', 'period' => '2021-2022'],
            ['name' => 'Ahmad Farid Dwi Prayitno', 'role' => 'Ketua 2022', 'period' => '2022-2023'],
            ['name' => 'Stevanus Dwi Rizki', 'role' => 'Ketua 2023', 'period' => '2023-2024'],
            ['name' => 'Saiful Bahri', 'role' => 'Ketua 2024', 'period' => '2024-2025'],
            ['name' => 'Heru Pratama', 'role' => 'Ketua 2025', 'period' => '2025-2026'],
        ];

        foreach ($demissioners as $d) {
            Demissioner::create($d);
        }
    }
}