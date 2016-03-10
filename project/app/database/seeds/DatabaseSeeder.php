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
DB::table('tb_users')->delete();
DB::table('tb_users')->insert([
'username' => 'admin',
'email' => 'admin@admin.com',
'password' => Hash::make('admin1234'),
'm_title' => '',
'm_name' => 'admin admin',
'm_type' => '1',
'm_active' => '1',
'created_at' => date('Y-m-d H:i:s')
]);
}
}