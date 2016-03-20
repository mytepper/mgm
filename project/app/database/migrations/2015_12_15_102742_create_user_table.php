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

		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email',120)->unique();
			$table->string('password', 60);
			$table->string('first_name', 60);
			$table->string('last_name', 60);
			$table->integer('type')->unsigned();
			$table->integer('sex')->unsigned();
			$table->integer('level_id')->unsigned();
			$table->integer('invite_id')->unsigned();
			$table->integer('register_price')->unsigned();
			$table->rememberToken();
			$table->timestamps();
		});

		Schema::create('levels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',60);
			$table->integer('up_price')->unsigned();
			$table->float('position_price',11);
			$table->float('invite_price');
			$table->timestamps();
		});

		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',60);
			$table->string('address',250);
			$table->timestamps();
		});

		Schema::create('cars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',60);
			$table->timestamps();
		});

		Schema::create('caryears', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',60);
			$table->timestamps();
		});
		Schema::create('cartypes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',60);
			$table->timestamps();
		});
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',60);
			$table->integer('company_id')->unsigned();
			$table->integer('car_id')->unsigned();
			$table->integer('cartype_id')->unsigned();
			$table->integer('caryear_id')->unsigned();
			$table->float('price');
			$table->float('com_lv1');
			$table->float('com_lv2');
			$table->float('com_lv3');
			$table->float('com_lv4');
			$table->float('com_lv5');
			$table->float('com_lv6');
			$table->float('com_lv7');
			$table->timestamps();
		});
		Schema::create('bills', function(Blueprint $table)
		{
			$table->increments('id');
			$table->dateTime('date');
			$table->integer('user_id')->unsigned();
			$table->integer('userlevel')->unsigned();
			$table->integer('carnumber')->unsigned();
			$table->integer('sale_by')->unsigned();
			$table->boolean('status_com',1);
			$table->boolean('status_bill',1);
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products');
			$table->float('com_member_amout');
			$table->float('com_invite_member_amout');
			$table->float('total');
			$table->float('total_invite');
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
		Schema::drop('users');
	}

}
