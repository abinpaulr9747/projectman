<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->string('firstname', 200);
            $table->string('middlename', 200);
            $table->string('lastname', 200);
            $table->string('role_id');
            $table->string('username', 200);
            $table->text('password');
            $table->text('remember_token');
            $table->integer('status');
        });

        DB::table('users')->insert(
            array(
                'firstname' => 'Abin',
                'middlename' => 'Neo',
                'lastname' => 'Paul',
                'role_id' => 1,
                'username' => 'abinpaul',
                'password' => Hash::make('11111111'),
                'status' => 1
                )
             );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
