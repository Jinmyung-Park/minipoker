<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $data = [];
       
        if (\Auth::check()) {
            
        $user = \Auth::user();
        
             if($stageCheck = \App\Stagecheck::where('user_id',$user->id)->first() == null){                ##初期データ生成
            $userStageInfo = $user -> stagechecks();  
                    $userStageInfo->create([
                        'cardOpenCheck' => '0',
                        'cardChange1' => '0',
                        'cardChange2' => '0',
                        'cardChange3' => '0',
                        'cardChange4' => '0',
                        'cardChange5' => '0',
                        'cardDetermine' => '0',
                        'stage'=>'1', 
                        'score' => '0', 
                        'highscore' => '0',
                        'stageClear' => '0',
                        ]);
              }

        $messages = \App\Message::orderBy('created_at', 'desc')->get();

        $userStageInfo = $user -> stagechecks();   
        $stageCheck = \App\StageCheck::where('user_id',$user->id)->first();
        
        if($stageCheck->score > $stageCheck->highscore){
            $userStageInfo->update([
                'highscore' => $stageCheck->score,
            ]);
        }
        $userStageInfo->update([
                        'cardOpenCheck' => '0',
                        'stage' => '1',
                        'score' => '0',
                        'cardChange1' => '0',
                        'cardChange2' => '0',
                        'cardChange3' => '0',
                        'cardChange4' => '0',
                        'cardChange5' => '0',
                        'cardDetermine' => '0',
                        'stageClear' => '0',
                        ]);
         
        $stageCheck = \App\StageCheck::where('user_id',$user->id)->first();
        
        $topRank = \App\StageCheck::orderBy('highscore', 'desc')->get();

        $top1 = \App\User::where('id',$topRank[0]->user_id)->first();
        $top2 = \App\User::where('id',$topRank[1]->user_id)->first();
        $top3 = \App\User::where('id',$topRank[2]->user_id)->first();
        
        $data = [
                'user' => $user,
                'messages' => $messages,
                'stageCheck' => $stageCheck,
                'top1' => $top1,
                'top2' => $top2,
                'top3' => $top3,
                'topRank' =>$topRank,
                
            ];

        return view('home',$data);
       }
       else{
           
        return view('home');
       }
    }
    
}
