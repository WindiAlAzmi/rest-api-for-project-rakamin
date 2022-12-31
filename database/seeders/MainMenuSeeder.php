<?php

namespace Database\Seeders;


use App\Models\MainMenu; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
             $mainMenu = [
            [
                'title' => 'cloud hosting',
            ],
            [
                'title' => 'server',
            ],
                  [
                'title' => 'domain',
            ],
            [
                'title' => 'promo',
            ],
                  [
                'title' => 'internet access',
            ],
            [
                'title' => 'email suites',
            ],
            [
                'title' => 'services',
            ],
            [
                'title' => 'customer care',
            ],
            
        ];

        MainMenu::insert($mainMenu);
    }
}
