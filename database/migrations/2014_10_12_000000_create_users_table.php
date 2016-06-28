<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nick_name');
            $table->string('image');
            $table->tinyInteger('sex');
            $table->dateTime('birthday');
            $table->string('address');
            $table->tinyInteger('member_type');
            $table->string('facebook_id');
            $table->string('twitter_id');
            $table->string('device_token');
            $table->tinyInteger('status');
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
        Schema::drop('users');
    }
}
