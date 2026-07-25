<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        $departments = [
            [
                'slug' => 'internal',
                'name' => 'Departemen Internal',
                'description' => 'Menjaga harmonisasi dan pengembangan SDM anggota.',
                'jobdesk' => 'Bertanggung jawab atas manajemen internal organisasi, pengembangan anggota, serta menjaga komunikasi dan koordinasi antar divisi.',
                'programs' => [
                    'Rapat Koordinasi Rutin',
                    'Evaluasi Kinerja Anggota',
                    'Pengelolaan Database Anggota',
                    'Kegiatan Penguatan Internal',
                ],
                'skills' => ['Leadership', 'Manajemen Waktu', 'Team Management', 'Problem Solving'],
                'projects' => [
                    'Sistem Monitoring Kehadiran',
                    'Dashboard Internal Management',
                    'Program Mentoring Anggota Baru',
                ],
                'members' => [
                    ['name' => 'Emre Grimley', 'role' => 'Koordinator'],
                    ['name' => 'Gita Patricia Ramadhani', 'role' => 'Staff'],
                    ['name' => 'Farhan Ahmad Syah', 'role' => 'Staff'],
                    ['name' => 'Variza Allana Gazara Putra', 'role' => 'Staff'],
                ],
            ],
            [
                'slug' => 'eksternal',
                'name' => 'Departemen Eksternal',
                'description' => 'Menjalin hubungan dengan pihak luar dan branding organisasi.',
                'jobdesk' => 'Mengelola komunikasi eksternal, membangun relasi dengan mitra, serta mengembangkan citra dan branding organisasi.',
                'programs' => [
                    'Kerja Sama Antar Organisasi',
                    'Media Partnership Event',
                    'Publikasi dan Branding Digital',
                    'Company Visit',
                ],
                'skills' => ['Public Speaking', 'Negotiation', 'Branding Strategy', 'Networking'],
                'projects' => [
                    'Website Company Profile',
                    'Campaign Media Sosial',
                    'Event Collaboration dengan Kampus Lain',
                ],
                'members' => [
                    ['name' => 'Adnan Abiyan Amrullah', 'role' => 'Koordinator'],
                    ['name' => 'Revanya Julianti Arsa Pradana', 'role' => 'Staff'],
                    ['name' => 'M. Syarif Hidayatulloh', 'role' => 'Staff'],
                    ['name' => 'Adi Jaya Wibawa', 'role' => 'Staff'],
                ],
            ],
            [
                'slug' => 'minat-bakat',
                'name' => 'Minat & Bakat',
                'description' => 'Mewadahi potensi akademik dan non-akademik anggota.',
                'jobdesk' => 'Mengembangkan potensi anggota dalam bidang akademik dan non-akademik melalui program pelatihan, kompetisi, dan pengembangan komunitas.',
                'programs' => [
                    'Pelatihan Programming',
                    'Workshop UI/UX',
                    'Turnamen E-Sport',
                    'Kompetisi Internal Hive',
                ],
                'skills' => ['Programming', 'UI/UX Design', 'Creative Thinking', 'Competitive Mindset'],
                'projects' => [
                    'Aplikasi Internal Hive',
                    'Design System Organisasi',
                    'Tim Kompetisi Hackathon',
                ],
                'members' => [
                    ['name' => 'Nathanael Ivan Susanto', 'role' => 'Koordinator'],
                    ['name' => 'Jumiati', 'role' => 'Staff'],
                    ['name' => 'Dafit Fernandus Ferdi Hardiansyah', 'role' => 'Staff'],
                    ['name' => 'Kinasih Putri Ramadhani', 'role' => 'Staff'],
                    ['name' => 'Khoirudin', 'role' => 'Staff'],
                ],
            ],
        ];

        foreach ($departments as $dept) {
            $members = $dept['members'];
            unset($dept['members']);

            $department = Department::create($dept);

            foreach ($members as $member) {
                $department->members()->create([
                    'name' => $member['name'],
                    'role' => $member['role'],
                    'image' => 'null',
                ]);
            }
        }
    }
}