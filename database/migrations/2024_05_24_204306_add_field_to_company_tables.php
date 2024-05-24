<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldToCompanyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_infos', function (Blueprint $table) {
            //
            $table->longText('company_transportation')->after('company_address')->nullable()->comment('交通資訊');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_infos', function (Blueprint $table) {
            //
            $table->dropColumn('company_transportation');
        });
    }
}
