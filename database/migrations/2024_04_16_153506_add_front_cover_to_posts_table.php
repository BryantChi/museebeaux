<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFrontCoverToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts_infos', function (Blueprint $table) {
            //
            $table->longText('post_front_cover')->after('post_slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts_infos', function (Blueprint $table) {
            //
            $table->dropColumn('post_front_cover');
        });
    }
}
