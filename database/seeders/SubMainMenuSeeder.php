<?php

namespace Database\Seeders;

use App\Models\MainMenu;
use App\Models\SubMainMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubMainMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subMainMenu = [
            [
                'main_menu_id' => '1',
                 'title_fitur' => 'Hosting Murah dengan Performa Optimal',
                 'content' => 'Value Cloud Hosting merupakan paket Cloud Hosting Indonesia yang dirancang khusus untuk keperluan sederhana seperti UKM, toko online, blog, website sederhana, hingga email untuk penggunaan personal.
                    Hosting Murah dari Qwords untuk pengguna baru website atau Anda yang baru terjun ke dalam industri/bisnis online. Storage sesuai kebutuhan, fleksibel, dan ekstra lega mulai 3 GB hingga 25 GB.'
            ],
            [
                'main_menu_id' => '1',
                 'title_fitur' => 'Wordpress Hosting',
                 'content' => 'Website profesional mulai dari sini! Layanan hosting untuk bisnis, toko online, dan website berita dengan spesifikasi optimal, dilengkapi dengan Litespeed Enterprise, Divi Premium, dan Elementor Pro yang membuat kinerja serta tampilan website jauh lebih produktif.'
            ],
              [
                'main_menu_id' => '1',
                 'title_fitur' => 'High Performance Bisnis',
                 'content' => 'Productivity starts here! Berikan Hosting terbaik untuk bisnis Anda. Kinerja lebih produktif dengan performa tinggi & optimal untuk website profesional perusahaan, e-commerce, startup bisnis, serta support Moodle--platform open source yang memudahkan sistem pembelajaran online.'
            ],
                 [
                'main_menu_id' => '2',
                 'title_fitur' => 'Cloud Virtual Private Server KVM SSD',
                 'content' => 'Cloud VPS Qwords kini hadir lebih revolusioner dengan teknologi KVM (Kernel-based Virtual Machine).
                 VPS Indonesia dengan Easy Install Control Panel & telah mendukung semua OS terbaru. Kinerja lebih cepat dengan menggunakan Enterprise Grade SSD Storage menjadikan nya sebagai VPS Terbaik'
              ],
                 [
                'main_menu_id' => '2',
                 'title_fitur' => 'Server untuk Sekolah Go Online',
                 'content' => 'Demi menunjang kelancaran kegiatan belajar mengajar secara daring, diperlukan infrastruktur yang baik untuk website sekolah. Gunakan Server yang dilengkapi dengan MOODLE (Modular Object-Oriented Dynamic Learning Environment). Sebuah platform yang digunakan untuk menunjang sistem manajemen pembelajaran secara online.Server Sekolah dapat dimanfaatkan untuk: e-learning - ujian sekolah - administrasi sekolah - komunikasi antara pengajar dan wali murid - PPDB.'
              ],
                 [
                'main_menu_id' => '2',
                 'title_fitur' => 'Dedicated Bare Metal Server',
                 'content' => 'Nikmati mengelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas. Terdapat pula pilihan control panel yang bisa anda sesuaikan dengan kebutuhan. Fasilitas monitoring 24x7 untuk memastikan Uptime server 99%, terdapat pula UPS keperluan backup. Telah dilengkapi dengan layanan Easy Managed. Bantuan ekstra dalam bentuk pengelolaan sederhana, pemantauan, dan pengawasan untuk penggunaan bandwidth, Ping, instalasi/reinstalasi, dsb. Anda kini dapat fokus menjalankan website perusahaan tanpa memikirkan pengelolaan server. Anda juga akan diberikan hak akses penuh (root access) untuk mengelola server seperti upgrade/downgrade resource/kapasitas sesuai keinginan. Namun kami menyediakan Manage the Box untuk layanan support server.'
              ],
                 [
                'main_menu_id' => '3',
                 'title_fitur' => 'Domain',
                 'content' => 'Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama yang paling mencerminkan bisnis, produk, atau layanan Anda.Gunakan Domain Indonesia dan Domain Popular untuk Anda'
              ],
           [
                'main_menu_id' => '3',
                 'title_fitur' => 'Sewa Domain',
                 'content' => 'Sewa Domain adalah cara ideal untuk mengamankan domain premium tanpa harus membayar seluruh biaya Domain. Anda hanya perlu menyewa Domain lalu bebas menjalankan bisnis atau website. Sewa Domain, solusi hemat biaya untuk dapatkan Domain terbaik & website berkualitas. Anda juga dapat menyewakan Domain milik Anda kepada pelanggan Qwords lainnya'
              ],

              ];

           SubMainMenu::insert($subMainMenu);
    }
}
