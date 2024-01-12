<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                "name" => "sunita",
                "password" => md5("123456"),
                "email" => "642021161@tsu.ac.th",
                "address" => "tsu",
                "telephone" => "0620915049",
            ],
            [
                "name" => "napat",
                "password" => md5("123456"),
                "email" => "napat@tsu.ac.th",
                "address" => "tsu",
                "telephone" => "0941257813",
            ],
            [
                "name" => "kajoy",
                "password" => md5("123456"),
                "email" => "kajoy@tsu.ac.th",
                "address" => "tsu",
                "telephone" => "0901111111",
            ],
        ]);
    }
}
