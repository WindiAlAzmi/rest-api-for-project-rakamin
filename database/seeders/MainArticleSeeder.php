<?php

namespace Database\Seeders;

use App\Models\MainArticle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mainArticle = [
            [
                'title' => 'Uptime Network diatas 99,99%',
                'image' =>  'https://drive.google.com/uc?id=10iaKXY6HlKNFJjJbTssgLT3kACMjXKLb',
                'content' => 'Dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering.'
            ],
                [
                'title' => 'Unmetered Bandwidth',
                'image' =>  'https://drive.google.com/uc?id=1I_aHU7rPMNo7mOAHM-5NvbuPFj3i7OPZ',
                'content' => 'Unmetered bandwidth memberikan kepuasan bagi pelanggan agar websitenya bisa dibuka kapanpun dari seluruh penjuru dunia tanpa khawatir kehabisan kuota traffic.'
            ],
             [
                'title' => 'Layanan Bantuan Pelanggan 24 jam',
                'image' =>  'https://drive.google.com/uc?id=1yFN1o6Vow0lkUB9VyZaONa6nxKWL-YBS',
                'content' => 'Technical Support & Customer Service Qwords siap membantu Anda selama 24 jam melalui layanan terpadu Live chat, Call Center, dan Support Ticket.'
            ],
              [
                'title' => 'Private Data Center Tier 3',
                'image' =>  'https://drive.google.com/uc?id=1LrvCga2H7QvuwrT_e3_e9o46POW2N7Hj',
                'content' => 'Qwords memiliki Data Center Private Tier 3 di Jakarta dengan full 24/7 monitoring Network Operation Center'
            ],
                [
                'title' => 'Total Security Protection',
                'image' =>  'https://drive.google.com/uc?id=1JNl4os1lpjeUMqG8z5oxRXhlJL7D_0HZ',
                'content' => 'Total Security Protection dari imunify360 yang melindungi server dari serangan DDOS, brute force, hack, dsb.'
            ],
            ];


            MainArticle::insert($mainArticle);
    }
}
