<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('url_source');
            $table->string('image');
            $table->integer('admin_user_id')->nullable();
            $table->integer('author_id')->nullable();
            $table->tinyInteger('is_hot');
            $table->integer('view_count');
            $table->tinyInteger('view_type');
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
        Schema::drop('story');
    }
}
