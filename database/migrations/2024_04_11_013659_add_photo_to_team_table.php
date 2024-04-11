<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhotoToTeamTable extends Migration
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
            $table->longText('headshots')->after('name')->nullable()->comment('個人照');
            $table->longText('headshots_alt')->after('headshots')->nullable()->comment('個人照片說明');
            $table->longText('certificate_license_photos')->after('certificate_license')->nullable()->comment('證照照片');
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
            $table->dropColumn('headshots');
            $table->dropColumn('headshots_alt');
            $table->dropColumn('certificate_license_photos');
        });
    }
}
