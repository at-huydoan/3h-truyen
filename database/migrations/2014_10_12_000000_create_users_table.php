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
            $table->string('nick_name')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('sex')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('member_type');
            $table->string('facebook_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('device_token')->nullable();
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
