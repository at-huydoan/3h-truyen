<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToFollowsStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('follows_story', function(Blueprint $table) {
            $table->foreign('from_user_id', 'follows_story_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('to_story_id', 'follows_story_ibfk_2')->references('id')->on('story')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('follows_story', function(Blueprint $table) {
            $table->dropForeign('follows_story_ibfk_1');
            $table->dropForeign('follows_story_ibfk_2');
        });
    }
}
