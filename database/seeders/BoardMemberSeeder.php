<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BoardMember;

class BoardMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            ['name' => 'Muhammad Fadel', 'role' => 'Sekretaris I'],
            ['name' => 'Nadhifah Irbah Hafizhah', 'role' => 'Sekretaris II'],
            ['name' => 'Wangi Suci Avrillya', 'role' => 'Bendahara I'],
            ['name' => 'Lailatul Putri Wijayanti', 'role' => 'Bendahara II'],
        ];

        foreach ($members as $i => $member) {
            BoardMember::create([
                'name' => $member['name'],
                'role' => $member['role'],
                'image' => '/placeholder-user.jpg',
                'order' => $i,
            ]);
        }
    }
}