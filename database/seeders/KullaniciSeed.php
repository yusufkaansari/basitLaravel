<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KullaniciSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name'=>"Yusuf",
          'email'=>"yusuf@gmail.com",
          'password'=>md5('102030'),
        ]);
    }
}
