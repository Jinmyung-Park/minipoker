<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyStageScores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('stage_scores');
        Schema::dropIfExists('stage_scores');
        Schema::create('stage_scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('clearScore');
            $table->timestamps();
        });
        
        DB::table("stage_scores")->insert(
        [
            ['clearScore'=>'10','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'25','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'40','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'70','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'90','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'120','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'150','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'180','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'210','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'240','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'280','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'300','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'330','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'360','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'400','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'450','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'480','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'500','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'515','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'550','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'580','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'600','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'650','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'680','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'710','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'730','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'770','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'800','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'830','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'860','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'900','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'920','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'950','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'980','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'1000','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'1050','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'1080','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'1120','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'1200','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'1300','created_at'=>now(),'updated_at'=>now(),],
            ['clearScore'=>'9999','created_at'=>now(),'updated_at'=>now(),],
        ]
      );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stage_scores');
    }
}
