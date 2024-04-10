<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToPageSettingTable extends Migration
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
            $table->longText('header_anlytics_code')->after('meta_google_site_verification')->nullable();
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
            $table->dropColumn('header_anlytics_code');
        });
    }
}
