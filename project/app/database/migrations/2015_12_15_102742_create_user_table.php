<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('tb_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username',60)->unique();
			$table->string('email',120)->unique();
			$table->string('password', 60);
			$table->string('m_title',60);
			$table->string('m_name',20);
			$table->string('m_sex',1);
			$table->string('m_type',1);
			$table->string('m_active',1);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tb_users');
	}

}
