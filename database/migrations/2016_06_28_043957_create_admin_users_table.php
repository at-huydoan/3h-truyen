<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nick_name');
            $table->string('image');
            $table->tinyInteger('sex');
            $table->dateTime('birthday');
            $table->string('address');
            $table->tinyInteger('roles');
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
        Schema::drop('admin_users');
    }
}
