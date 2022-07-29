<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_users')->insert([
            'name' => 'keyur',
            'email' => 'keyur@gmail.com',
            'password' => Hash::make('2001'),
            'image'=>'IMG_2380-02.jpg',
            'roleid'=>'2',
        ]);
    }
}
