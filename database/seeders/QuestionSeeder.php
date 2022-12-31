<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = [
            [
                'title' => 'Apa beda Shared Hosting, Cloud Hosting dan Cloud VPS?', 
                'sub_main_menu_id' => '1'
            ],

            [
                'title' => 'Mengapa hosting murah cocok untuk pemula atau skala kecil?', 
                'sub_main_menu_id' => '1'
            ],
            [
                'title' => 'Apa yang dimaksud WordPress Hosting?', 
                'sub_main_menu_id' => '2'
            ], 
              [
                'title' => 'Apa yang dimaksud CloudPop', 
                'sub_main_menu_id' => '2'
            ], 
              [
                'title' => 'Apa itu Cloud Hosting', 
                'sub_main_menu_id' => '3'
            ], 
             [
                'title' => 'Apa beda cloud hosting dan cloud vps', 
                'sub_main_menu_id' => '3'
            ], 
               [
                'title' => 'Apa itu Cloud VPS', 
                'sub_main_menu_id' => '4'
            ], 
                [
                'title' => 'Apakah server ini hanya bisa digunakan untuk keperluan sekolah', 
                'sub_main_menu_id' => '5'
            ], 
               [
                'title' => 'Apa itu dedicated server?', 
                'sub_main_menu_id' => '6'
            ], 
                [
                'title' => 'Apa itu domain?', 
                'sub_main_menu_id' => '7'
            ], 
               [
                'title' => 'Apa itu sewa domain?', 
                'sub_main_menu_id' => '8'
            ], 
            
            
        ];

        Question::insert($question);
    }
}
