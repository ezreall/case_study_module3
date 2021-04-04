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

                'email' => 'admin@admin.com',
                'password' => bcrypt('123456'),
            ],

        ];
        DB::table('admins')->insert($data);    }
}
