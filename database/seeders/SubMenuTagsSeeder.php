<?php

namespace Database\Seeders;

use App\Models\SubMenuTags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubMenuTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagsWithSubMenu = [
            [
             'tags_id' => '1',
             'sub_main_menus_id' => '1',
            ],
            [
                'tags_id' => '2',
                'sub_main_menus_id' => '1'

            ],
              [
                'tags_id' => '1',
                'sub_main_menus_id' => '2'

              ],
                [
                'tags_id' => '2',
                'sub_main_menus_id' => '2'

                ],
                  [
                'tags_id' => '1',
                'sub_main_menus_id' => '3'
                  ],
                    [
                'tags_id' => '2',
                'sub_main_menus_id' => '3'

                    ],
                              [
                'tags_id' => '3',
                'sub_main_menus_id' => '2'

                              ],
                                        [
                'tags_id' => '4',
                'sub_main_menus_id' => '2'

                                        ],
                                                  [
                'tags_id' => '5',
                'sub_main_menus_id' => '3'

            ]
            ];

            SubMenuTags::insert($tagsWithSubMenu);
    }
}
