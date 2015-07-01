<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
        // delete current data in db
        DB::table('users')->delete();

        // create new records
        User::create(['username' => "admin", 'password' => Hash::make('admin'), 'is_admin' => true]);
		User::create(['username' => "guest", 'password' => Hash::make('guest'), 'is_admin' => false]);
	}

}
