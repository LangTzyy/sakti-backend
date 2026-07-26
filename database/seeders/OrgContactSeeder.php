<?php

namespace Database\Seeders;

use App\Models\OrgContact;
use Illuminate\Database\Seeder;

class OrgContactSeeder extends Seeder
{
    public function run(): void
    {
        OrgContact::create([
            'address' => "Institut Teknologi dan Bisnis Asia Malang\nJl. Soekarno Hatta, Rembuksari No. 1A\nMojolangu, Lowokwaru, Kota Malang 65113",
            'email' => 'himapro.sakti@gmail.com',
            'office_hours' => 'Senin - Jumat, 09.00 - 16.00 WIB',
            'maps_query' => '-7.937973,112.6266227',
            'instagram_url' => null,
            'linkedin_url' => null,
            'github_url' => null,
        ]);
    }
}
