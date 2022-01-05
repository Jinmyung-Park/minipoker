<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStageclearToStagechecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stagechecks', function (Blueprint $table) {
            $table->unsignedBigInteger('stageClear');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stagechecks', function (Blueprint $table) {
            $table->dropColumn('stageClear');
        });
    }
}
