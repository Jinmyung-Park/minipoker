<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        $top1 = \App\User::where('id',$topRank[0]->user_id)->first();
        $top2 = \App\User::where('id',$topRank[1]->user_id)->first();
        $top3 = \App\User::where('id',$topRank[2]->user_id)->first();
        
        $stageCheck = \App\StageCheck::where('user_id',$user->id)->first();
        
        $data = ['user' => $user,
                 'messages' => $messages,
                 'stageCheck' => $stageCheck,
                 'top1' => $top1,
                 'top2' => $top2,
                 'top3' => $top3,
                 'topRank' =>$topRank,
        ];
        
        return view('home',$data);
    }
}
