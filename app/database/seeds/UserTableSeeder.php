<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Briyan Adityatama',
			'username' => 'briyanwam',
			'email'    => 'briyanwam@gmail.com',
			'password' => Hash::make('awesome'),
		));
	}

}