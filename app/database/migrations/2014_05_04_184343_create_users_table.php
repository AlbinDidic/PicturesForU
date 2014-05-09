<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
	public function up()
	{
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->biginteger('uid')->unsigned();
            $table->string('username');
            $table->string('access_token');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('photo');
            $table->string('password');
            $table->string('gender');
            $table->boolean('liked');
            $table->string('remember_token');
            $table->timestamps();
        });
	}

	public function down()
	{
        Schema::drop('users');
	}
}