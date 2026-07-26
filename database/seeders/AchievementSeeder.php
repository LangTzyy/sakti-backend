<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Illuminate\Database\Seeder;

class AchievementSeeder extends Seeder
{
    public function run(): void
    {
        Achievement::create([
            'name' => 'Rina Wijaya',
            'achievement' => 'Juara 1 Gemastik UX Design',
            'badge' => 'Winner',
            'image' => null,
            'order' => 0,
        ]);

        Achievement::create([
            'name' => 'Tim SAKTI Go',
            'achievement' => 'Gold Medal Lomba Inovasi IoT',
            'badge' => 'Winner',
            'image' => null,
            'order' => 1,
        ]);

        Achievement::create([
            'name' => 'Dimas Anggara',
            'achievement' => 'Google Solution Challenge Top 50',
            'badge' => 'Top 50',
            'image' => null,
            'order' => 2,
        ]);
    }
}
