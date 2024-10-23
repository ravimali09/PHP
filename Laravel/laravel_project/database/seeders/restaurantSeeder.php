<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\restaurant;
Use Faker\Factory as faker;

class restaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=new restaurant;
        $data->city_id="2";
        $data->name="Ravi";
        $data->address="Krishna Nagar";
        $data->image="ravi.jpeg";
        $data->save();
    }
}
