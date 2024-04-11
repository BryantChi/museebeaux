<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialMediaFieldToTeamTable extends Migration
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
            $table->string('facebook')->after('role')->nullable()->comment('Facebook');
            $table->string('threads')->after('facebook')->nullable()->comment('Threads');
            $table->string('line')->after('threads')->nullable()->comment('Line');
            $table->string('instagram')->after('line')->nullable()->comment('Instagram');
            $table->string('youtube')->after('instagram')->nullable()->comment('Youtube');
            $table->string('tiktok')->after('youtube')->nullable()->comment('TikTok');
            $table->string('wechat')->after('youtube')->nullable()->comment('WeChat');
            $table->string('x_twitter')->after('wechat')->nullable()->comment('X(Twitter)');
            $table->string('linkedin')->after('x_twitter')->nullable()->comment('LinkedIn');
            $table->string('github')->after('linkedin')->nullable()->comment('GitHub');
            $table->string('telegram')->after('github')->nullable()->comment('Telegram');
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
            $table->dropColumn('facebook');
            $table->dropColumn('threads');
            $table->dropColumn('line');
            $table->dropColumn('instagram');
            $table->dropColumn('youtube');
            $table->dropColumn('tiktok');
            $table->dropColumn('wechat');
            $table->dropColumn('x_twitter');
            $table->dropColumn('linkedin');
            $table->dropColumn('github');
            $table->dropColumn('telegram');
        });
    }
}
