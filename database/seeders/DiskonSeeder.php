<?php

namespace Database\Seeders;

use App\Models\Diskon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiskonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diskon = [
            [
                'title' => 'Value Cloud Hosting',
                'sub title' => 'VCH1',
                'price' => 'Rp 24.500',
                'disk' => '3 GB',
                'Bandwidth' => 'Unlimited',
                'core cpu' => '0.5 Core',
                'addon/parked domain' => 'No'
            ],
             [
                'title' => 'Unlimited Hosting',
                'sub title' => 'Signature',
                'price' => 'Rp 109.000',
                'disk' => 'Unlimited',
                'Bandwidth' => 'Unlimited',
                'core cpu' => '1 Core',
                'addon/parked domain' => '5/5'
            ],
               [
                'title' => 'High Performance',
                'sub title' => 'PHC Bisnis 1',
                'price' => 'Rp 80.000',
                'disk' => '3 GB',
                'Bandwidth' => 'Unlimited',
                'core cpu' => '1 Core',
                'addon/parked domain' => '-'
            ],
             [
                'title' => 'Cloud VPS KVM SSD',
                'sub title' => 'VPS SC1',
                'price' => 'Rp 135.000',
                'disk' => '25 GB',
                'Bandwidth' => 'Unlimited',
                'core cpu' => '1 Core',
                'addon/parked domain' => 'Unlimited'
            ],
            ];

            Diskon::insert($diskon);
    }
}
