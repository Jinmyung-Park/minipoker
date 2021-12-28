<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagechecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagechecks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('cardOpenCheck');

            $table->unsignedBigInteger('cardChange1');
            $table->unsignedBigInteger('cardChange2');
            $table->unsignedBigInteger('cardChange3');
            $table->unsignedBigInteger('cardChange4');
            $table->unsignedBigInteger('cardChange5');
            
            $table->unsignedBigInteger('cardDetermine');
                        
            $table->unsignedBigInteger('stage');
            $table->unsignedBigInteger('score');
            $table->unsignedBigInteger('highscore');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stagechecks');
    }
}
