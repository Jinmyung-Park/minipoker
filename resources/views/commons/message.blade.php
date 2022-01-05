<div class="bg_message m-2 mt-3 mb-4 text-center">
 <br />
 <span class="text_shadow comment">コメントしてスコアを共有</span><br /><br />
    
    {!! Form::open(['route' => 'messages.store']) !!}
        <div class="form-group">
            {!! Form::textarea('content',null,['class' => 'form-control', 'rows' => '1','required','maxlength'=>"45",]) !!}
            {!! Form::submit('登録して終了する', ['class' => 'btn comment_button mt-2']) !!}
        </div>
    {!! Form::close() !!}

</div>