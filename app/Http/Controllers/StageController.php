<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StageController extends Controller
{

    public function index($id)
    {   
        $data = []; 
            
        $user = \Auth::user();
        
        if($_SERVER['REQUEST_URI']=="/users/$user->id/stage")   ##他のユーザーstageに直接移動するとアクセス拒否
        {
            $userStageInfo = $user -> stagechecks();         ##hasmany stagecheck関数   
    
                if($stageCheck = \App\Stagecheck::where('user_id',$id)->first() == null){                ##初期データ生成
                
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
                        'stageClear' => '0',
                        ]);
                }else{
                    $userStageInfo->update([
                        'cardOpenCheck' => '0',
                        'cardChange1' => '0',
                        'cardChange2' => '0',
                        'cardChange3' => '0',
                        'cardChange4' => '0',
                        'cardChange5' => '0',
                        'cardDetermine' => '0',
                        'stage'=>'1', 
                        'score' => '0', 
                        'stageClear' => '0',
                        ]);
                }
                
            $stageCheck = \App\StageCheck::where('user_id',$id)->first();
            $stageScore = \App\stageScore::where('stage',$stageCheck->stage)->first();
            
            $data = [
                'user' => $user,
                'stageCheck' => $stageCheck,
                'stageScore' => $stageScore,
                ];
                
            return view('stage',$data);
                    
        }else{
            return view('commons.access_deny');
            }
    }

    public function cardOpen($cardOpenCheck)
    {
 
        $data = [];
        
        $user = \Auth::user();
        $userStageInfo = $user -> stagechecks();         ##hasmany stagecheck関数 

        $slotNumber = 0;
        
        $userStageInfo->update([
                'cardOpenCheck' => '1',
                ]);
        
        $stageCheck = \App\StageCheck::where('user_id',$cardOpenCheck)->first();
        $stageScore = \App\stageScore::where('stage',$stageCheck->stage)->first();
        
        $cardShape  = array(1,2,3,4);     ##　1=♧ , 2=♢ , 3=♡, 4=♤
        $cardNumber = array(7,8,9,10,11,12,13,14);
        
        $randomShapeArray = [];
        $randomNumberArray = [];
        $randomCard = [];
        
        for($i=0;$i<5;$i++) {
            $randomCard[$i] = $cardShape[mt_rand(0,3)];                 ##Random Shape
        }
        
        for($i=0;$i<5;$i++) {
            $randomCard[$i+5] = $cardNumber[mt_rand(0,7)];              ##Random Number
        }
        
        $data = [
            'user' => $user,
            'stageCheck' => $stageCheck,
            'randomCard' => $randomCard,
            'slotNumber' => $slotNumber,
            'stageScore' => $stageScore,
            ];
            
        return view('stage',$data);
    }


    public function cardChange($cardChange)
    {
        $data = [];
        

        $user = \Auth::user();
        $userStageInfo = $user -> stagechecks();         ##hasmany stagecheck関数 
        
        $cardNumbers = [];                               ##Chnage前のカード
        $slotNumber = $_POST['slotNumber'];
        $cardNumbers1 = $_POST['cardNumbers1'];
        $cardNumbers2 = $_POST['cardNumbers2'];
        $cardNumbers3 = $_POST['cardNumbers3'];
        $cardNumbers4 = $_POST['cardNumbers4'];
        $cardNumbers5 = $_POST['cardNumbers5'];
        $cardNumbers6 = $_POST['cardNumbers6'];
        $cardNumbers7 = $_POST['cardNumbers7'];
        $cardNumbers8 = $_POST['cardNumbers8'];
        $cardNumbers9 = $_POST['cardNumbers9'];
        $cardNumbers10 = $_POST['cardNumbers10'];
                                                                        
        $cardNumbers = [$cardNumbers1, 
                        $cardNumbers2,
                        $cardNumbers3,
                        $cardNumbers4,
                        $cardNumbers5,
                        $cardNumbers6,
                        $cardNumbers7,
                        $cardNumbers8,
                        $cardNumbers9,
                        $cardNumbers10];
        
        
        $cardShape  = array(1,2,3,4);     ##　1=♧ , 2=♢ , 3=♡, 4=♤
        $cardNumber = array(7,8,9,10,11,12,13,14);
        
        $randomShapeArray = [];
        $randomNumberArray = [];
        $randomCard = [];
        
        for($i=0;$i<5;$i++) {
            $randomCard[$i] = $cardShape[mt_rand(0,3)];
        }
        
        for($i=0;$i<5;$i++) {
            $randomCard[$i+5] = $cardNumber[mt_rand(0,7)];
        }
        
        if($slotNumber==1){
            $cardNumbers[0] = $randomCard[0];
            $cardNumbers[5] = $randomCard[5];
            $randomCard = $cardNumbers;
            $userStageInfo->update([
                            'cardChange1' => '1'
                        ]);
        }
            elseif($slotNumber==2){
                $cardNumbers[1] = $randomCard[1];
                $cardNumbers[6] = $randomCard[6];
                $randomCard = $cardNumbers;
                $userStageInfo->update([
                            'cardChange2' => '1'
                        ]);
        }
                elseif($slotNumber==3){
                    $cardNumbers[2] = $randomCard[2];
                    $cardNumbers[7] = $randomCard[7];
                    $randomCard = $cardNumbers;
                    $userStageInfo->update([
                            'cardChange3' => '1'
                        ]);
        }
                    elseif($slotNumber==4){
                        $cardNumbers[3] = $randomCard[3];
                        $cardNumbers[8] = $randomCard[8];
                        $randomCard = $cardNumbers;
                        $userStageInfo->update([
                            'cardChange4' => '1'
                        ]);
        }
                        elseif($slotNumber==5){
                            $cardNumbers[4] = $randomCard[4];
                            $cardNumbers[9] = $randomCard[9];
                            $randomCard = $cardNumbers;
                                        $userStageInfo->update([
                            'cardChange5' => '1'
                        ]);
                        
        }
        
        $stageCheck = \App\StageCheck::where('user_id',$cardChange)->first();
        $stageScore = \App\stageScore::where('stage',$stageCheck->stage)->first();

        $data = [
            'user' => $user,
            'stageCheck' => $stageCheck,
            'randomCard' => $randomCard,
            'slotNumber' => $slotNumber,
            'cardNumbers' => $cardNumbers,
            'stageScore' => $stageScore,
            ];
            
        return view('stage',$data);

    }

   public function cardDetermine($cardDetermine)
    {
 
        $data = [];
        
        $user = \Auth::user();
        $userStageInfo = $user -> stagechecks();         ##hasmany stagecheck関数 

        $userStageInfo->update([
                'cardDetermine' => '1',
                ]);
        
        $cardNumbers = [];                               ##Chnage前のカード
        $randomCard = [];
        
        $cardNumbers1 = $_POST['cardNumbers1'];
        $cardNumbers2 = $_POST['cardNumbers2'];
        $cardNumbers3 = $_POST['cardNumbers3'];
        $cardNumbers4 = $_POST['cardNumbers4'];
        $cardNumbers5 = $_POST['cardNumbers5'];
        $cardNumbers6 = $_POST['cardNumbers6'];
        $cardNumbers7 = $_POST['cardNumbers7'];
        $cardNumbers8 = $_POST['cardNumbers8'];
        $cardNumbers9 = $_POST['cardNumbers9'];
        $cardNumbers10 = $_POST['cardNumbers10'];
        
        $cardNumbers = [$cardNumbers1, 
                        $cardNumbers2,
                        $cardNumbers3,
                        $cardNumbers4,
                        $cardNumbers5,
                        $cardNumbers6,
                        $cardNumbers7,
                        $cardNumbers8,
                        $cardNumbers9,
                        $cardNumbers10];
        
        $randomCard = $cardNumbers;
        $cardShapeCheck = [];                               ##card組み合わせ check
        $cardNumberCheck = [];

        $cardShapeCheck = [$cardNumbers[0],$cardNumbers[1],$cardNumbers[2],$cardNumbers[3],$cardNumbers[4]];
        $cardNumberCheck = [$cardNumbers[5],$cardNumbers[6],$cardNumbers[7],$cardNumbers[8],$cardNumbers[9]];


/////////////////////////////////////Flush Check/////////////////////////////////////////
        $shape = [0,0,0,0];
        $flush = 0;
        for($q = 0 ; $q<5 ; $q++){
            switch($cardShapeCheck[$q]){
            case 1 :
                $shape[0] ++;
                break;
            case 2 :
                $shape[1] ++;
                break;
            case 3 :
                $shape[2] ++;
                break;
            case 4 :
                $shape[3] ++;
                break;
            }
            if($shape[0] >= 5)
                {$flush = 1;}
                else if($shape[1] >= 5)
                    {$flush = 1;}
                    else if($shape[2] >= 5)
                        {$flush = 1;}           
                        else if($shape[3] >= 5)
                            {$flush = 1;}
        }
////////////////////////////////Straight Check/////////////////////////////////////////
        $mountain = 0;
        $backstraight = 0;
        $straight = 0;
        
        sort($cardNumberCheck);

        if($cardNumberCheck == [10,11,12,13,14]){
            $mountain = 1;
        }else if($cardNumberCheck == [7,8,9,10,14]){
                $backstraight = 1;
            }else if($cardNumberCheck == [9,10,11,12,13] || $cardNumberCheck == [8,9,10,11,12] || $cardNumberCheck == [7,8,9,10,11]){
                    $straight = 1;
                    }
//////////////////////////FiveCard~Onepair Check/////////////////////////////////////////////////      
        $onePair = 0;
        $onePairNumber = 0;
        $twoPair = 0;
        $triple = 0;
        $fullhouse = 0;
        $fourCard = 0;
        $fiveCard = 0;
        
        $cardSameCheck = array_count_values($cardNumberCheck);
        $cardSameChecks = [0,0,0,0,0,0,0,0];
        for($i = 7 ; $i<15 ; $i++){
        
            if(array_key_exists($i,$cardSameCheck)){
                $cardSameChecks[$i-7] = $cardSameCheck[$i];
                }
            }
        
        for($i = 0 ; $i<8 ; $i++){
            
            if($cardSameChecks[$i]==5){                         ##FiveCard Check
                $fiveCard = 1;
                }elseif($cardSameChecks[$i]==4){                ##FourCard Check
                        $fourCard = 1;
                        }elseif($cardSameChecks[$i]==3){
            
                                $triple = 1;                    ##Triple Check
                        
                                for($p = 0 ; $p<8 ; $p++){
                                if($cardSameChecks[$p]==2){
                                $fullhouse = 1;                 ##Fullhouse Check
                                }
                            }
                        }elseif($cardSameChecks[$i]==2){
                                
                                $onePairNumber = $i+7;
                                $onePair = 1;                   ##Onepair Check
                               
                                for($k = 0 ; $k<8 ; $k++){
                                    if($cardSameChecks[$k]==2 && $k+7 !=$onePairNumber){
                                    $twoPair = 1;                      ##Twopair Check
                                }
                            }
                        }
        }
//////////////////////////HighCard Check//////////////////////////////////////////////////
        $highCard = 0;
        rsort($cardNumberCheck);
        switch($cardNumberCheck[0]){
            case 7:
                $highCard = 7;
                break;
            case 8:
                $highCard = 8;
                break;
            case 9:
                $highCard = 9;
                break;
            case 10:
                $highCard = 10;
                break;
            case 11:
                $highCard = 11;
                break;
            case 12:
                $highCard = 12;
                break;
            case 13:
                $highCard = 13;
                break;
            case 14:
                $highCard = 14;
                break;
        }
////////////////////////////////Result Check//////////////////////////////////////////////  
        $result = "";
        $cardScore = 0;     #最後にユーザーデータに格納

        if($flush==1 && $fiveCard ==1){
            $result = "Five Flush";
            $cardScore = 200;
        }elseif($flush==1 && $mountain ==1){
            $result = "Royal Straight Flush";
            $cardScore = 180;
        }else if($flush==1 && $backstraight ==1){
            $result = "Back Straight Flush";
            $cardScore = 170;
        }else if($flush==1 && $straight ==1){
            $result = "Straight Flush";
            $cardScore = 160;
        }else if($flush==1 && $fullhouse ==1){
            $result = "House Flush";
            $cardScore = 120;
        }else if($fiveCard==1){
            $result = "Five Card";
            $cardScore = 100;
        }else if($flush ==1){
            $result = "Flush";
            $cardScore = 85;
        }else if($mountain ==1){
            $result = "Mountain";
            $cardScore = 80;
        }else if($backstraight ==1){
            $result = "BackStraight";
            $cardScore = 65;
        }else if($fourCard==1){
            $result = "Four Card";
            $cardScore = 60;
        }else if($straight ==1){
            $result = "Straight";
            $cardScore = 50;
        }else if($fullhouse ==1){
            $result = "Fullhouse";
            $cardScore = 40;
        }else if($triple ==1){
            $result = "Triple";
            $cardScore = 30;
        }else if($twoPair ==1){
            $result = "Twopair";
            $cardScore = 20;
        }else if($onePair ==1){
            $result = "Onepair";
            $cardScore = 10;
        }else if($highCard ==14){
            $result = "HighCard(A)";
            $cardScore = 8;
        }else if($highCard ==13){
            $result = "HighCard(K)";
            $cardScore = 6;
        }else if($highCard ==12){
            $result = "HighCard(Q)";
            $cardScore = 5;
        }else if($highCard ==11){
            $result = "HighCard(J)";
            $cardScore = 4;
        }else if($highCard ==10){
            $result = "HighCard(10)";
            $cardScore = 3;
        }else if($highCard ==9){
            $result = "HighCard(9)";
            $cardScore = 2;
        }else if($highCard ==8){
            $result = "HighCard(8)";
            $cardScore = 1;
        }else if($highCard ==7){
            $result = "HighCard(7)";
        }
        

        $stageCheck = \App\StageCheck::where('user_id',$cardDetermine)->first();
        $score = $stageCheck -> score;     
        
        $userStageInfo->update([
        'score' => $score+$cardScore,
        ]);
        
        $stageCheck = \App\StageCheck::where('user_id',$cardDetermine)->first();
        $stageScore = \App\stageScore::where('stage',$stageCheck->stage)->first();
                
//////////////////////////////////////////////////////////////////////////////////////////      
        if( ($stageCheck->score) >= ($stageScore->clearScore) ){
              $userStageInfo->update([
                    'stageClear' => $stageCheck->stageClear+1      #####ㅐㅐㅐㅐㅐㅐㅐㅐ
                    ]);
        }
        $stageCheck = \App\StageCheck::where('user_id',$cardDetermine)->first();
        
        $data = [
            'user' => $user,
            'stageCheck' => $stageCheck,
            'randomCard' => $randomCard,
            'result' => $result,
            'cardScore' => $cardScore,
            'stageScore' => $stageScore,
            ];
            
        return view('stage',$data);
    }
    
    public function nextStage($id)
    {   
        $data = []; 
            
        $user = \Auth::user();
        $userStageInfo = $user -> stagechecks();
        $stageCheck = \App\StageCheck::where('user_id',$id)->first();
        
        $userStageInfo->update([
                        'cardOpenCheck' => '0',
                        'cardChange1' => '0',
                        'cardChange2' => '0',
                        'cardChange3' => '0',
                        'cardChange4' => '0',
                        'cardChange5' => '0',
                        'cardDetermine' => '0',
                        'stage' => $stageCheck->stage+1,   ##oooooo
                        ]);
        
        $stageCheck = \App\StageCheck::where('user_id',$id)->first();
        $stageScore = \App\stageScore::where('stage',$stageCheck->stage)->first();
                        
                        
        if(($stageCheck->stage)<41 && $_SERVER['REQUEST_URI']=="/users/$user->id/stage/nextStage" && ($stageCheck->stageClear)+1 == $stageCheck->stage ) 
        {
            $data = [
                'user' => $user,
                'stageCheck' => $stageCheck,
                'stageScore' => $stageScore,
                ];
                
            return view('stage',$data);
                    
        }elseif(($stageCheck->stage)>=41 && $_SERVER['REQUEST_URI']=="/users/$user->id/stage/nextStage" && ($stageCheck->stageClear)+1 == $stageCheck->stage ){
            $data = [
                'user' => $user,
                'stageCheck' => $stageCheck,
                'stageScore' => $stageScore,
                ];
                
            return view('allClear',$data);
        }
        else{
            return view('commons.access_deny');
        }
    }


}