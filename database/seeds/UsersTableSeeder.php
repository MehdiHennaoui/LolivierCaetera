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
        DB::table('users')->insert([
        	'first_name' => 'olivier',
        	'last_name' => 'rodier',
            'username' => 'soda',
        	'email' => 'admin@admin.com',
        	'password' => Hash::make('admin'), 
         ]);
    }
}
