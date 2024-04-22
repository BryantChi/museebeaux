<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNullableToServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services_infos', function (Blueprint $table) {
            //
            $table->string('service_name')->nullable()->change();
            $table->longText('service_icon')->nullable()->change();
            $table->string('service_icon_alt')->nullable()->change();
            $table->longText('service_cover_front')->nullable()->change();
            $table->string('service_cover_front_alt')->nullable()->change();
            $table->longText('service_description')->nullable()->change();
            $table->longText('service_sub_list')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services_infos', function (Blueprint $table) {
            //
        });
    }
}
