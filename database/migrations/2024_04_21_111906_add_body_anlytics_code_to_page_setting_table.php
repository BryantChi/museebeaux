<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBodyAnlyticsCodeToPageSettingTable extends Migration
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
            $table->longText('body_anlytics_code')->after('header_anlytics_code')->nullable();
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
            $table->dropColumn('body_anlytics_code');
        });
    }
}
