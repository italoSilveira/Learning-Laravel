<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' 		=> 'Ítalo Henrique',
        	'email'		=> 'italodssouza@gmail.com',
        	'password'	=> bcrypt('123456789'),
        	]);
    }
}
