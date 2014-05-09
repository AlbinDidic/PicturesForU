<?php

use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration {
	public function up()
	{
        Schema::create('pictures', function($table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('path');
            $table->string('message');
            $table->timestamps();
        });
	}
	public function down()
	{
        Schema::drop('pictures');
	}
}