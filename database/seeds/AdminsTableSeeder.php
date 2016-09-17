<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("admins")->insert([
        		'username' => "admin",
        		'email' => 'admin@mailinator.com',
        		'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
        		'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
        ]);
    }
}
