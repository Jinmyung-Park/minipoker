<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data = [];

        $user = \Auth::user();

        
        $userStageInfo = $user -> stagechecks();
        $stageCheck = \App\StageCheck::where('user_id',$user->id)->first();

        if($stageCheck->score > $stageCheck->highscore){
            $userStageInfo->update([
                'highscore' => $stageCheck->score,
            ]);
            $user->update([
                'highscore' => $stageCheck->score,
            ]);
        }
       
        $request->user()->messages()->create([
            'content' => $request->content,
            'user_id' => $user->id,
            'user_stage' => $stageCheck->stage,
            'user_score' => $stageCheck->score,
            ]);

        $messages = \App\Message::orderBy('created_at', 'desc')->get();

        $usernames = DB::select("SELECT name,content,user_stage,user_score,messages.created_at
                               FROM users
                               INNER JOIN messages
                               ON users.id = messages.user_id
                               ORDER BY created_at ASC");
                               
        $userStageInfo->update([
                        'cardOpenCheck' => '0',
                        'cardChange1' => '0',
                        'cardChange2' => '0',
                        'cardChange3' => '0',
                        'cardChange4' => '0',
                        'cardChange5' => '0',
                        'cardDetermine' => '0',
                        'stageClear' => '0',
                        'score' => '0',
                        'stage' => 1
                        ]);
                        
        $topRank = \App\StageCheck::orderBy('highscore', 'desc')->get();
        
        $ranking = DB::select("SELECT name,stagechecks.highscore
                               FROM users
                               INNER JOIN stagechecks
                               ON users.id = stagechecks.user_id
                               ORDER BY highscore DESC");
        
        $userCount = count($ranking);
        
        for($i = 0 ; $i<=$userCount-1 ; $i++){
            $ranking[$i]->rank=$i+1;
        }
                    
        $key = array_search($user->name, array_column($ranking, "name"));
        
        $userRank = $ranking[$key]->rank;

        
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
        
        
        $stageCheck = \App\StageCheck::where('user_id',$user->id)->first();
        
        $data = ['user' => $user,
                 'messages' => $messages,
                 'stageCheck' => $stageCheck,
                 'userRank' => $userRank,
                 'top1' => $top1,
                 'top2' => $top2,
                 'top3' => $top3,
                 'topRank' =>$topRank,
                 'userCount' =>$userCount,
                 'usernames' =>$usernames,
        ];
        
        return view('home',$data);
    }
}
