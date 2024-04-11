<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExperienceToTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('team_infos', function (Blueprint $table) {
            //
            $table->longText('experience')->after('degree')->nullable()->comment('經歷');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team_infos', function (Blueprint $table) {
            //
            $table->dropColumn('experience');
        });
    }
}
