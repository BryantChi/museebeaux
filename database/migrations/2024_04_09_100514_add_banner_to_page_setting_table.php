<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerToPageSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_setting_infos', function (Blueprint $table) {
            //
            $table->longText('banner')->after('header_anlytics_code')->nullable();
            $table->longText('banner_alt')->after('banner')->nullable();
            $table->longText('banner_link')->after('banner_alt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_setting_infos', function (Blueprint $table) {
            //
            $table->dropColumn('banner');
            $table->dropColumn('banner_alt');
            $table->dropColumn('banner_link');
        });
    }
}
