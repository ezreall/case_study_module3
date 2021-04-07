<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=>'thang',
                'email' => 'admin@admin.com',
                'password' => bcrypt('123456'),
            ], [
                'name'=>'huy',
                'email' => 'huy@admin.com',
                'password' => bcrypt('123456'),
            ], [
                'name' => 'thang',
                'email' => 'thang@admin.com',
                'password' => bcrypt('123456'),
            ],

        ];
        DB::table('admins')->insert($data);    }
}
