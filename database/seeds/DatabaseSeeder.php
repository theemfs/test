<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Roles;
use App\Tasks;


class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(UserTableSeeder::class);
		$this->call(RolesTableSeeder::class);
		$this->call(TasksTableSeeder::class);
	}


}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate();
		User::create(['email' => 'admin@example.com', 'password'=>Hash::make('12')]);//default user
	}

}

class RolesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('roles')->truncate();
		Roles::create(['name' => 'requestor']);
		Roles::create(['name' => 'owner']);
		Roles::create(['name' => 'watcher']);
	}

}

class TasksTableSeeder extends Seeder {

	public function run()
	{
		DB::table('tasks')->truncate();
		Tasks::create(['name' => 'Need new report!', 'text' => 'Need new report! Need new report! Need new report! Need new report! Need new report! Need new report!', 'progress'=>0, 'priority'=>30]);
		Tasks::create(['name' => 'Update Server', 'text' => 'Update Server Update Server Update Server Update Server Update Server Update Server', 'progress'=>10, 'priority'=>0]);
		Tasks::create(['name' => 'Creating new instance of server', 'text' => 'Creating new instance of server Creating new instance of server', 'progress'=>90, 'priority'=>50]);
	}

}