@if (count($messages) > 0)

    <ul class="list-unstyled message_box_border ml-2">
        @foreach ($messages as $message)


                <div class="media-body">
                    <div class = "m-2 message_box2">
                        <h5>&nbsp;&nbsp;<span class = "user_name">{!! $usernames[$message->id-1]->name !!}</span>
                        <br />&nbsp;&nbsp;&nbsp;&nbsp;stage<span class = "font_skyblue text_shadow">{!! $message->user_stage !!}</span>  score 
                        <span class = "font_yellow text_shadow">{!! $message->user_score !!}</h5></span>
                        <p class = "message_box p-2">{!! $message->content !!}</p>
                        <span class="d-flex justify-content-center mb-1">{{ $message->created_at }}に投稿</span>
                    </div>
                </div>

        @endforeach
    </ul>

@endif