<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('story', function(Blueprint $table) {
           $table->foreign('admin_user_id', 'story_ibfk_1')->references('id')->on('admin_users')->onUpdate('RESTRICT')->onDelete('SET NULL');
            $table->foreign('author_id', 'story_ibfk_2')->references('id')->on('author')->onUpdate('RESTRICT')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('story', function(Blueprint $table) {
            $table->dropForeign('story_ibfk_1');
            $table->dropForeign('story_ibfk_2');
        });
    }
}
