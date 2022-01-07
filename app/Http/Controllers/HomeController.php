<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;      ##DB SQL文を使用

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
         
        $stageCheck = \App\Stagecheck::where('user_id',$user->id)->first();
        
        $topRank = \App\Stagecheck::orderBy('highscore', 'desc')->get();


        $ranking = DB::select("SELECT name,highscore
                               FROM users
                               INNER JOIN stagechecks
                               ON users.id = stagechecks.user_id
                               ORDER BY highscore DESC");
        
        $userCount = count($ranking);
                    
        $key = array_search($user->name, array_column($ranking, "name"));
        
        $userRank = $ranking[$key]->name;

        $top1 = [];
        $top2 = [];
        $top3 = [];
        
        $top1 = \App\User::where('id',$topRank[0]->user_id)->first();
        
        if($userCount>=2)
        {
            $top2 = \App\User::where('id',$topRank[1]->user_id)->first();
        }
        
        if($userCount>=3){
            $top3 = \App\User::where('id',$topRank[2]->user_id)->first();
        }
        
        $data = [
                'user' => $user,
                'messages' => $messages,
                'stageCheck' => $stageCheck,
                'userRank' => $userRank,
                'top1' => $top1,
                'top2' => $top2,
                'top3' => $top3,
                'topRank' =>$topRank,
                'userCount' =>$userCount,
                
            ];

        return view('home',$data);
       }
       else{
           
        return view('home');
       }
    }
    
    public function ranking()
    {
        $data = [];
        $user = [];
        
        if (\Auth::check()) {
            $user = \Auth::user();
        }
        
        $userRanking = DB::select("SELECT name,highscore
                               FROM users
                               INNER JOIN stagechecks
                               ON users.id = stagechecks.user_id
                               ORDER BY highscore DESC");
        
        $userCount = count($userRanking);
        $counter = [1,2,$userCount];

        $data = [
                'user' => $user,
                'userRanking' => $userRanking,
                'counter' => $counter,
            ];
        
        return view('ranking_board',$data);
    }
    
        public function help()
    {
        $data = [];
        $user = [];
        
        if (\Auth::check()) {
            $user = \Auth::user();
        }
        
        $userRanking = DB::select("SELECT name,highscore
                               FROM users
                               INNER JOIN stagechecks
                               ON users.id = stagechecks.user_id
                               ORDER BY highscore DESC");
        
        $userCount = count($userRanking);
        $counter = [1,2,$userCount];

        $data = [
                'user' => $user,
                'userRanking' => $userRanking,
                'counter' => $counter,
            ];
        
        return view('homeHelp',$data);
    }
}
