<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Addons;
class AddonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Addons::create([
            'name' => 'transportation upgrade',
            'description' => '<p>Transportation upgrade with VW Caravelle.</p>',
            'price' => '900000',
            'price_show' => 'Start from 60 USD/900K IDR',
            'image' => 'transportation-upgrade-230727-025241.png',
        ]);
        Addons::create([
            'name' => 'vip access add-ons',
            'description' => '<p>Get access for an exclusive sightseeing spot or attractions.</p>',
            'price' => '900000',
            'price_show' => 'Start from 60 USD/900K IDR',
            'image' => 'vip-access-add-ons-230727-025401.png',
        ]);
        Addons::create([
            'name' => 'security upgrade',
            'description' => '<p>Security upgrade with DISHUB and police patrol.</p>',
            'price' => '1500000',
            'price_show' => 'Start from 100 USD/1.500K IDR',
            'image' => 'security-upgrade-230727-025208.png'

        ]);
        Addons::create([
            'name' => 'road captain upgrade',
            'description' => '<p>Professional road captain for extra long e-bike tours.</p>',
            'price' => '600000',
            'price_show' => 'Start from 60 USD/900K IDR',
            'image' => 'road-captain-upgrade-230727-025127.png'

        ]);
        Addons::create([
            'name' => 'documentation add-ons',
            'description' => '<p>Professional photographer to capture moments at the tour.</p>',
            'price' => '900000',
            'price_show' => 'Start from 60 USD/900K IDR',
            'image' => 'documentation-add-ons-230727-025323.png'

        ]);

    }
}
