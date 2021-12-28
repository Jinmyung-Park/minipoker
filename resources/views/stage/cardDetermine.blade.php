<div class="pt-1"> 
     <div class="row col-sm-12 m-auto d-flex justify-content-center">
        {!! Form::open(['route' => ['cardDetermine',$stageCheck -> user_id], 'method' => 'post']) !!}
        @include('cards.recordBeforeChange')
        {!! Form::submit('Determine', ['class' => "btn button_determine btn-block"]) !!}
        {!! Form::close() !!}
    </div>
</div>