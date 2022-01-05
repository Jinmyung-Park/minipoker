@include('commons.error_messages')

<div class="bg_stageMiddle">
    
    <div class="row col-sm-12 m-auto d-flex justify-content-center">
        @if($cardScore >= 100)
        <span class = "result_1 p-2 pl-5 pr-5">{!! $result !!} +{!! $cardScore !!}</span>
        @elseif($cardScore >= 65) 
        <span class = "result_2 p-2 pl-5 pr-5">{!! $result !!} +{!! $cardScore !!}</span>
        @elseif($cardScore >= 40) 
        <span class = "result_3 p-2 pl-5 pr-5">{!! $result !!} +{!! $cardScore !!}</span>
        @else
        <span class = "result_4 p-2 pl-5 pr-5">{!! $result !!} +{!! $cardScore !!}</span>
        @endif
    </div>
       
    @if( ($stageCheck->score) >= ($stageScore->clearScore) )
        <div class="row col-sm-12 m-auto d-flex justify-content-center">
            <span class = "result_message mb-2">STAGE {!! $stageCheck->stage !!} CLEAR!!!</span>
        </div>
 
        <div class="row col-sm-12 m-auto d-flex justify-content-center">
            {!! Form::open(['route' => ['nextStage',$stageCheck->user_id], 'method' => 'post']) !!}
            {!! Form::submit('Next Stage', ['class' => "btn next_button mb-2 "]) !!}
            {!! Form::close() !!}
        </div>
        
    @else
        <div class="row col-sm-12 m-auto d-flex justify-content-center">
            <span class = "gameover_message mb-2">GAME OVER...</span>
        </div>

        <div class="row col-sm-12 m-auto d-flex justify-content-center">
            <a class="gameover_icon p-1 mb-2" href="/"><i class=" fas fa-sign-out-alt m-2 fa-lg"></i></a>
        </div>
        
        @if($stageCheck->score > $stageCheck->highscore)
            <div class="highscore  m-auto d-flex justify-content-center">
                HighScore!!!
            </div>
        @endif
        
        @include('commons.message')
        
    @endif
    
</div>