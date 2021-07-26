<?php

use App\Sponsor;
use Illuminate\Database\Seeder;

class SponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsors = [
            [
                'name' => 'bronze',
                'price' => 2.99,
                'duration' => 24
            ],
            [
                'name' => 'silver',
                'price' => 5.99,
                'duration' => 72
            ],
            [
                'name' => 'gold',
                'price' => 9.99,
                'duration' => 144
            ],

        ];


        foreach ($sponsors as $sponsor){
            $new_sponsor = new Sponsor;
            $new_sponsor->name = $sponsor['name'];
            $new_sponsor->price = $sponsor['price'];
            $new_sponsor->duration = $sponsor['duration'];
            $new_sponsor->save();

        }
    }
}
