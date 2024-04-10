<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('姓名');
            $table->string('role')->nullable()->comment('角色');
            $table->longText('introduce')->nullable()->comment('簡介');
            $table->longText('degree')->nullable()->comment('學歷');
            $table->longText('expertise')->nullable()->comment('專長');
            $table->longText('certificate_license')->nullable()->comment('證照/資格');
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
        Schema::drop('team_infos');
    }
}
