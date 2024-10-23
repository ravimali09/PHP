<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\admin;
Use Faker\Factory as faker;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=new admin;
        $data->admin_email="mahesh@gmail.com";
        $data->admin_password="1234";
        $data->save();
    }
}
