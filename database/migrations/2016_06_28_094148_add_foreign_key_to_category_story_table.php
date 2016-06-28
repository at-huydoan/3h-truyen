<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToCategoryStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_story', function(Blueprint $table) {
            $table->foreign('story_id', 'category_story_ibfk_1')->references('id')->on('story')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('category_id', 'category_story_ibfk_2')->references('id')->on('category')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_story', function(Blueprint $table) {
            $table->dropForeign('category_story_ibfk_1');
            $table->dropForeign('category_story_ibfk_2');
        });
    }
}
