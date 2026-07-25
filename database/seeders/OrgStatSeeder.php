<?php

namespace Database\Seeders;

use App\Models\OrgStat;
use Illuminate\Database\Seeder;

class OrgStatSeeder extends Seeder
{
    public function run(): void
    {
        OrgStat::create([
            'label' => 'Alumni Tersebar',
            'number' => 500,
            'suffix' => '+',
            'order' => 0,
        ]);

        OrgStat::create([
            'label' => 'Event Diselenggarakan',
            'number' => 30,
            'suffix' => '+',
            'order' => 1,
        ]);

        OrgStat::create([
            'label' => 'Divisi Aktif',
            'number' => 6,
            'suffix' => null,
            'order' => 2,
        ]);

        OrgStat::create([
            'label' => 'Peserta Kegiatan',
            'number' => 1000,
            'suffix' => '+',
            'order' => 3,
        ]);
    }
}
