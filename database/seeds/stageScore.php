<?php

use Illuminate\Database\Seeder;

class stageScore extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table("stage-score")->insert(
        [
            ['stage'=>'1','clearScore'=>'15','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'2','clearScore'=>'35','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'3','clearScore'=>'50','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'4','clearScore'=>'90','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'5','clearScore'=>'150','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'6','clearScore'=>'180','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'7','clearScore'=>'200','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'8','clearScore'=>'250','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'9','clearScore'=>'300','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'10','clearScore'=>'360','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'11','clearScore'=>'380','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'12','clearScore'=>'400','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'13','clearScore'=>'450','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'14','clearScore'=>'470','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'15','clearScore'=>'520','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'16','clearScore'=>'550','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'17','clearScore'=>'580','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'18','clearScore'=>'610','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'19','clearScore'=>'630','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'20','clearScore'=>'700','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'21','clearScore'=>'730','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'22','clearScore'=>'750','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'23','clearScore'=>'770','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'24','clearScore'=>'800','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'25','clearScore'=>'820','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'26','clearScore'=>'850','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'27','clearScore'=>'880','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'28','clearScore'=>'900','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'29','clearScore'=>'920','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'30','clearScore'=>'1000','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'31','clearScore'=>'1030','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'32','clearScore'=>'1060','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'33','clearScore'=>'1080','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'34','clearScore'=>'1120','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'35','clearScore'=>'1200','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'36','clearScore'=>'1240','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'37','clearScore'=>'1280','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'38','clearScore'=>'1320','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'39','clearScore'=>'1360','created_at'=>now(),'updated_at'=>now(),],
            ['stage'=>'40','clearScore'=>'1500','created_at'=>now(),'updated_at'=>now(),],
        ]
      );
    }
}
