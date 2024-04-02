<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_name');
            $table->longText('service_icon');
            $table->string('service_icon_alt');
            $table->longText('service_cover_front');
            $table->string('service_cover_front_alt');
            $table->longText('service_description');
            $table->longText('service_sub_list');
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
        Schema::drop('services_infos');
    }
}
