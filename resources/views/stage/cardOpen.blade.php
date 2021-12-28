<div class="bg_stageMiddle">
    
    <div class="row col-sm-12 m-auto d-flex justify-content-center">

        {!! Form::open(['route' => ['cardOpenCheck',$stageCheck -> user_id], 'method' => 'post']) !!}
        {!! Form::submit('Open', ['class' => "btn button_change"]) !!}
        {!! Form::close() !!}


    </div>

</div>