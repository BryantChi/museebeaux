<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageSettingInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_setting_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('url')->comment('網址');
            $table->text('title')->comment('標題');
            $table->text('meta_title')->nullable()->comment('Meta-Title');
            $table->text('meta_description')->nullable()->comment('Meta-description');
            $table->text('meta_keywords')->nullable()->comment('Meta-keywords');
            $table->text('meta_google_site_verification')->nullable()->comment('Meta-Google-Site-Verification');
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
        Schema::drop('page_setting_infos');
    }
}
