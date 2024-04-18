<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add2fieldToPostTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_type_infos', function (Blueprint $table) {
            //
            $table->text('type_slug')->after('id')->nullable();
            $table->integer('type_parent_id')->after('type_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_type_infos', function (Blueprint $table) {
            //
            $table->dropColumn('type_slug');
            $table->dropColumn('type_parent_id');
        });
    }
}
