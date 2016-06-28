<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('story_id');
            $table->integer('admin_user_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->integer('before_chapter_id');
            $table->integer('after_chapter_id');
            $table->dateTime('expected_date');
            $table->tinyInteger('status');
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
        Schema::drop('chapter');
    }
}
