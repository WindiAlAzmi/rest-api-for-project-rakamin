<?php

namespace Database\Seeders;

use App\Models\Benefit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles =
        [
            [ 
                'title' => 'harga ekonomis',
                'content' => 'Paket Cloud Hosting harga paling hemat dengan performa optimal yang sesuai dengan kebutuhan.',
                'sub_menu_id' => '1',
            
            ],
            [ 
                'title' => 'Boost Power',
                'content' => 'Tingkatkan kecepatan Hosting 2 kali lipat saat dibutuhkan. Test plugin, import/export data, hingga event Flash Sale tanpa kendala. GRATIS 30 menit per bulan. (Tersedia di versi cPanel)',
                'sub_menu_id' => '1',
            
            ],
     [ 
                'title' => 'Cloud Based Hosting',
                'content' => 'WordPress Hosting Anda akan menggunakan Cloud Based Hosting sehingga dalam segi skalabilitas akan jauh lebih tinggi dibandingkan dengan Shared Hosting biasa.',
                'sub_menu_id' => '2',
            
            ],
              [ 
                'title' => 'Optimasi WordPress',
                'content' => 'Hosting Anda akan didesain khusus untuk penggunaan WordPress dan mendapat Ekstra CloudPOP untuk menghasilkan performa terbaik WordPress Hosting Anda.',
                'sub_menu_id' => '2',
            
            ],
                [ 
                'title' => 'GIT Version Control',
                'content' => 'Fitur unggulan dari HPCH yang mempermudah developer untuk melakukan deploy sebuah aplikasi/website serta mengetahui perubahan yang terjadi di dalam source code.',
                'sub_menu_id' => '3',
            
            ],
                   [ 
                'title' => 'Programming Languages',
                'content' => 'High Performance Cloud Hosting dari Qwords didesain agar developer friendly dengan Support bahasa pemrograman seperti Ruby/Python.',
                'sub_menu_id' => '3',
            
            ],
              [ 
                'title' => 'Easy Managed with 24 x 7 Support',
                'content' => 'Easy Managed, Extra Care for your Data!, Layanan bantuan pelanggan 24 jam untuk bantuan teknis & billing melalui portal terpadu via live chat, support ticket, dan call center.',
                'sub_menu_id' => '4',
            
            ],
               [ 
                'title' => 'Raid 10 SSD',
                'content' => 'Teknologi RAID 10 dan SSD Storage dengan performa terbaik 4 kali lebih cepat.',
                'sub_menu_id' => '4',
            
            ],
            ];

            Benefit::insert($articles);
    }
}
