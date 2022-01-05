{{--
<script type="text/javascript">     //戻るボタン対策
history.pushState(null, null, "/poker"); 
window.onpopstate = function(event) { history.go(1); };
</script>
--}}
<br />
 <div class="col-md-12 bg_home p-2 m-auto">
 
    <div class = "row mt-4">
        <h5 class="col-sm-3 offset-sm-2 border_b m-auto font-italic">
            <i class="fas fa-trophy m-2 ranking_icon1"></i>
            <span class="ranking_text1 ranking_shadow">1st &nbsp;{!!$top1->name!!}</span>&nbsp;&nbsp;&nbsp;<span class = "font_white">{!!$topRank[0]->highscore!!}</span>
        </h5>
        <h5 class="col-sm-3 border_b m-auto font-italic">
            <i class="fas fa-trophy m-2 ranking_icon2"></i>
            <span class="ranking_text1 ranking_shadow">2nd &nbsp;{!!$top2->name!!}</span>&nbsp;&nbsp;&nbsp;<span class = "font_white">{!!$topRank[1]->highscore!!}</span>
        </h5>
        <h5 class="col-sm-3 border_b m-auto font-italic">
            <i class="fas fa-trophy m-2 ranking_icon3"></i>
           <span class="ranking_text1 ranking_shadow">3rd &nbsp;{!!$top3->name!!}</span>&nbsp;&nbsp;&nbsp;<span class = "font_white">{!!$topRank[2]->highscore!!}</span>
        </h5>

    </div>
    
    <div class = "row m-2">
        <div class = "col-sm-6 message_frame">
            <div class = "board_title text_shadow">
                <h>comment Board</h>
            </div>
            @include('messageBoard')
        </div>
        <div class = "col-sm-6 message_frame">
            <div class = "board_title text_shadow">
                <h>User Information</h>
            </div>
            <div class = "user_box">

                <div class = "m-2 ml-1">
                    <span class = "font_title text_shadow ">Name</span><br />&nbsp;&nbsp;<span class = "font_skyblue text_shadow font_info">{!!$user->name!!}</span><br />
                    <span class = "font_title text_shadow ">Ranking</span><br />&nbsp;&nbsp;<span class = "font_skyblue text_shadow font_info">{!!$user->name!!}</span><br />
                    <span class = "font_title text_shadow ">Highscore</span><br />&nbsp;&nbsp;<span class = "font_skyblue text_shadow font_info">{!!$stageCheck->highscore!!}</span><br />
                    <span class = "font_title text_shadow ">Money</span><br />&nbsp;&nbsp;<span class = "font_skyblue text_shadow font_info">0（未実装機能）</span><br />
                    <span class = "font_title text_shadow ">Chance</span><br />&nbsp;&nbsp;<span class = "font_skyblue text_shadow font_info">0（未実装機能）</span><br />
                    <span class = "font_title text_shadow ">User regist</span><br />&nbsp;&nbsp;<span class = "font_skyblue text_shadow font_info">{!!$user->created_at!!}</span><br />
                </div>
            </div>
        </div>
    </div>
    <div class = "row bg_home2 ml-1">
        &nbsp;
    </div>
    <div class = "row ">
        <div class = "col-sm-4 offset-sm-4 text-center p-3 mb-2">
            {!! Form::open(['route' => ['stage.index',$user->id], 'method' => 'get']) !!}
            {!! Form::submit('Start', ['class' => "btn start_button justify-content-center pl-5 pr-5 p-3 "]) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <div class = "row">
    </div>
</div>
