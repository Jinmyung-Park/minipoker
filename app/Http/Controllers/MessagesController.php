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
        }
       
        $request->user()->messages()->create([
            'content' => $request->content,
            'user_id' => $user->id,
            'user_name' => $user->name,
            'user_stage' => $stageCheck->stage,
            'user_score' => $stageCheck->score,
            ]);

        $messages = \App\Message::orderBy('created_at', 'desc')->get();
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
        
        $ranking = DB::select("SELECT i1.user_id AS 'user_id',i1.highscore AS 'highscore',(SELECT count(i2.highscore) FROM stagechecks i2 WHERE i1.highscore < i2.highscore) + 1 AS 'rank'
                               FROM stagechecks i1
                               ORDER BY highscore");
                               
        $key = array_search($user->id, array_column($ranking, 'user_id'));
        $userRank = $ranking[$key]->rank;
        
        $top1 = \App\User::where('id',$topRank[0]->user_id)->first();
        $top2 = \App\User::where('id',$topRank[1]->user_id)->first();
        $top3 = \App\User::where('id',$topRank[2]->user_id)->first();
        
        $stageCheck = \App\StageCheck::where('user_id',$user->id)->first();
        
        $data = ['user' => $user,
                 'messages' => $messages,
                 'stageCheck' => $stageCheck,
                 'userRank' => $userRank,
                 'top1' => $top1,
                 'top2' => $top2,
                 'top3' => $top3,
                 'topRank' =>$topRank,
        ];
        
        return view('home',$data);
    }
}
