<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answer = [
            [
                'content' => 'Shared Hosting adalah tempat di mana dalam 1 server digunakan oleh banyak user, Setiap user mendapatkan resource yang terbatas, karenanya harganya sangat murah. Cloud Hosting adalah layanan hosting yang menempatkan semua data website pengguna pada cloud. Data-data yang disimpan berada pada server virtual bukan lagi menggunakan server fisik. Saat terjadi masalah pada server, server lain yang masih normal akan menggantikan tugas server yang sedang bermasalah, jadi tidak ada website yang akan terdampak dari permasalahan server yang sedang terjadi. Sedangkan VPS, kita akan mendapatkan 1 server virtual lengkap dengan komponennya. Performa lebih unggul dibanding Cloud Hosting karena Anda bebas melakukan kustomisasi server virtual yang Anda miliki. Inilah yang membuat VPS lebih unggul dan lebih mahal dibanding share & cloud Hosting',
                'question_id' => '1'
            ],
            [   'content' => 'Selain harga ekonomis, Hosting Murah Terbaik dari Qwords memiliki spesifikasi yang telah disesuaikan untuk kebutuhan pemula seperti kapasitas, akun email, database, dan resource lainnya. Pelanggan dapat upgrade ke paket di atasnya di kemudian hari apabila diperlukan. Paket unggulan VCH 3 dan VCH 4 sudah dapat Gratis Domain dan Template Premium Website',
                'question_id' => '2'
            ],
            [
                 'content' => 'WordPress Hosting merupakan Hosting yang konfigurasinya sudah didesain dan disesuaikan untuk engine/website WordPress',
                'question_id' => '3'
            ],
            [
                'content' => 'Dengan menambah fitur CloudPop, Anda bisa menambahkan beberapa domain dengan alamat yang berbeda, sesuai dengan berapa CloudPop yang dipilih. Untuk subdomain Anda sebagai administrator bisa menambahkan unlimited subdomain',
                'question_id' => '4'
            ],
            [
                'content' => 'Cloud Hosting adalah layanan penyimpanan data-data dan file website yang bekerja dengan beberapa server virtual. Cloud Hosting menggunakan beberapa server digabung menjadi satu dimana dalam satu server tersebut dipakai beberapa pengguna sekaligus',
                'question_id' => '5'
            ],
            [
                'content' => 'Cloud Hosting Indonesia adalah layanan penyimpanan data-data website yang menggunakan beberapa server digabung menjadi satu dimana dalam satu server tersebut dipakai beberapa pengguna sekaligus. Sedangkan CLoud VPS adalah layanan server yang menggunakan teknologi virtualisasi dimana dalam satu server fisik akan dibagi menjadi beberapa server virtual yang dikhususkan hanya untuk satu pengguna saja',
                'question_id' => '6'
            ],
            [
                    'content' => 'Cloud Virtual Private Server (Cloud VPS) merupakan sebuah server virtual yang memiliki Dedicated Resource, dimana pelanggan dapat menggunakan semua resource VPS itu sendiri (tidak berbagi dengan pelanggan lainnya).',
                'question_id' => '7'
            ],
            [
                    'content' => 'Server Sekolah dapat dimanfaatkan untuk e-learning, ujian sekolah, administrasi sekolah, komunikasi antara pengajar dan wali murid, hingga PPDB.',
                'question_id' => '8'
            ],
            [
                    'content' => 'Dengan memilih Dedicated Server, Anda akan menyewa satu server penuh untuk menjalankan website. Anda nantinya tak perlu berbagi sumber daya server yang meliputi bandwidth, disk space, processor, RAM, dan sebagainya dengan pengguna lain. Selain website website, dedicated server juga bisa dimanfaatkan untuk email, aplikasi, dan bahkan game hosting.',
                'question_id' => '9'
            ]
            ];

            Answer::insert($answer);
    }
}
