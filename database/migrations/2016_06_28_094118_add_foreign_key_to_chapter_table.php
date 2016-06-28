<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToChapterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chapter', function(Blueprint $table) {
            $table->foreign('story_id', 'chapter_ibfk_1')->references('id')->on('story')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('admin_user_id', 'chapter_ibfk_2')->references('id')->on('admin_users')->onUpdate('RESTRICT')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chapter', function(Blueprint $table) {
            $table->dropForeign('chapter_ibfk_1');
            $table->dropForeign('chapter_ibfk_2');
        });
    }
}
