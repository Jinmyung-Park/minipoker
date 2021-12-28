<div class="bg_stageMiddle">
    <div class="row col-sm-12  m-auto d-flex justify-content-between">
        
        <div class="col-xs-3 d-flex justify-content-center">
            &nbsp;
            @if($stageCheck -> cardChange1 == 0)
                {!! Form::open(['route' => ['cardChange',[$stageCheck -> user_id]], 'method' => 'post']) !!}
                @include('cards.recordBeforeChange')
                {!! Form::hidden('slotNumber', 1)!!}
                {!! Form::submit('Change', ['class' => "btn button_change"]) !!}
                {!! Form::close() !!}
            @else
            <div class="mr-4 ml-5"></div>
            @endif
        </div>
        
        <div class="col-xs-3">
            &nbsp;&nbsp;&nbsp;
        </div>
        
        <div class="col-xs-3 d-flex justify-content-center">
            @if($stageCheck -> cardChange2 < 1)
                {!! Form::open(['route' => ['cardChange',[$stageCheck -> user_id]], 'method' => 'post']) !!}
                @include('cards.recordBeforeChange')
                {!! Form::hidden('slotNumber', 2)!!}
                {!! Form::submit('Change', ['class' => "btn button_change"]) !!}
                {!! Form::close() !!}
            @else
            <div class="mr-4 ml-5"></div>
            @endif
        </div>
        
        <div class="col-xs-3">
            &nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        
        <div class="col-xs-3 d-flex justify-content-center">
            @if($stageCheck -> cardChange3 == 0)
                {!! Form::open(['route' => ['cardChange',[$stageCheck -> user_id]], 'method' => 'post']) !!}
                @include('cards.recordBeforeChange')
                {!! Form::hidden('slotNumber', 3)!!}
                {!! Form::submit('Change', ['class' => "btn button_change"]) !!}
                {!! Form::close() !!}
            @else
            <div class="mr-4 ml-5"></div>
            @endif
        </div>
        
        <div class="col-xs-3">
            &nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        
        <div class="col-xs-3 d-flex justify-content-center">
            @if($stageCheck -> cardChange4 == 0)
                {!! Form::open(['route' => ['cardChange',[$stageCheck -> user_id]], 'method' => 'post']) !!}
                @include('cards.recordBeforeChange')
                {!! Form::hidden('slotNumber', 4)!!}
                {!! Form::submit('Change', ['class' => "btn button_change"]) !!}
                {!! Form::close() !!}
            @else
            <div class="mr-4 ml-5"></div>
            @endif
        </div>
        
        <div class="col-xs-3">
            &nbsp;&nbsp;&nbsp;&nbsp;
        </div>

        <div class="col-xs-3 d-flex justify-content-center">
            @if($stageCheck -> cardChange5 == 0)
                {!! Form::open(['route' => ['cardChange',[$stageCheck -> user_id]], 'method' => 'post']) !!}
                @include('cards.recordBeforeChange')
                {!! Form::hidden('slotNumber', 5)!!}
                {!! Form::submit('Change', ['class' => "btn button_change"]) !!}
                {!! Form::close() !!}
            @else
            <div class="mr-4 ml-5"></div>
            @endif
            &nbsp;
        </div>
 

    </div>

</div>