<?php

namespace Database\Seeders;

use App\Models\Tags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['title' => 'Gratis  Domain',
        ],
           ['title' => 'Gratis  SSL',
    ],
    ['title' => 'Gratis  Premium Templates',
],
['title' => 'Gratis 30 Hari',
],
['title' => 'Developer Friendly',
              ]
        ];

        Tags::insert($tags);
    }
}
