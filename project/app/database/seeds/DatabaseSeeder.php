<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
Model::unguard();

$this->call('UserTableSeeder');
$this->command->info('User Table Seeded!');
}

}

class UserTableSeeder extends Seeder {
public function run()
{
DB::table('users')->delete();
DB::table('users')->insert([
'email' => 'admin@admin.com',
'password' => Hash::make('admin1234'),
'type' => '1',
'invite_id' => '0',
'level_id' => '0',
'created_at' => date('Y-m-d H:i:s')
]);
}
}
