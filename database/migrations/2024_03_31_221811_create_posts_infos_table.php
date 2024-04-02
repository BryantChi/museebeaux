<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('post_title');
            $table->longText('post_content')->nullable();
            $table->text('post_type')->nullable();
            $table->boolean('post_seo_setting_customize')->default(true);
            $table->text('post_seo_title')->nullable();
            $table->text('post_meta_title')->nullable();
            $table->longText('post_meta_description')->nullable();
            $table->text('post_meta_keywords')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts_infos');
    }
}
