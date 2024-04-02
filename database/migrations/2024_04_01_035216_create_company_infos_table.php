<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('company_name');
            $table->text('company_address')->nullable();
            $table->text('company_map_url')->nullable();
            $table->longText('company_map_iframe')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('company_fax')->nullable();
            $table->text('company_facebook')->nullable();
            $table->text('company_instagram')->nullable();
            $table->text('company_line')->nullable();
            $table->text('company_youtube')->nullable();
            $table->text('company_x')->nullable();
            $table->string('company_id_number')->nullable();
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
        Schema::drop('company_infos');
    }
}
