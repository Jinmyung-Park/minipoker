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
        
        $userStageInfo = $user -> stagechecks();   

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
                        ]);
        $data = [
                'user' => $user,
            ];

        return view('home',$data);
       }
       else{
           
        return view('home');
       }
    }
    
}
