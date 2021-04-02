<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vp_user')->insert([
        	'name' => 'admin',
        	'email' => 'xuandanh04@gmail.com',
        	'password' => Hash::make('admin'),
        	'role' => 3
        ]);
    }
}
