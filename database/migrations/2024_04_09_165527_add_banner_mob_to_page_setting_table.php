<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerMobToPageSettingTable extends Migration
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
            $table->longText('banner_mob')->after('banner')->nullable();
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
            $table->dropColumn('banner_mob');
        });
    }
}
