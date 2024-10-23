<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\customer;
Use Faker\Factory as faker;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=new customer;
        $data->name="Ravi";
        $data->email="ravi@gmail.com";
        $data->password="1234";
        $data->contact_number="1234567891";
        $data->status="Unblock";
        $data->save();
    }
}
