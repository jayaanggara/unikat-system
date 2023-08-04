<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Tour;
class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tour::create([
            'name' => 'fullday vw combi e-bike tour',
            'price' => '1800000',
            'price_show' => '120 USD or IDR 1.800K/Person',
            'description' => '<ul>
            <li>10-hours of Bali e-bike tour include 5-hours ride, break time, and activities.</li>
            <li>Up to 3 destinations area in Bali.</li>
            <li>With professional road captain.</li>
            <li>Curated restaurant visit.</li>
            <li>Travel in style and comfort with VW Combi 1981.</li>
            </ul>',
        ]);
        Tour::create([
            'name' => 'Long e-bike tour',
            'price' => '1100000',
            'price_show' => '79 USD or IDR 1.100K/Person',
            'description' => '<ul>
            <li>6-hours of Bali e-bike tour include 4-hours ride, break time, and activities.</li>
            <li>3 destinations in 1 area in Bali.</li>
            <li>With professional road captain.</li>
            <li>Curated restaurant visit.</li>
            </ul>',
        ]);
        Tour::create([
            'name' => 'CUSTOMIZED e-bike tour',
            'price' => '1800000',
            'price_show' => '120 USD or IDR 1.800K/Person',
            'description' => '<ul>
            <li>Create a personalized route based on your interests</li>
            <li>Work with our team to design the perfect itinerary</li>
            <li>Enjoy a personal guide who will provide insider tips and recommendations</li>
            </ul>',
        ]);
        Tour::create([
            'name' => 'Short e-bike Tour',
            'price' => '700000',
            'price_show' => '49 USD or IDR 700K/Person',
            'description' => '<ul>
            <li>2.5-hours of Bali e-bike tour include 2-hours ride, break time, and activities.</li>
            <li>Only 1 destination area in Bali.</li>
            <li>With professional road captain.</li>
            </ul>',
        ]);
    }
}
