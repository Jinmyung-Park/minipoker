<script type="text/javascript">     //戻るボタン対策
history.pushState(null, null, "/poker"); 
window.onpopstate = function(event) { history.go(1); };
</script>

<br />
 <div class="bg-light m-auto">
 
    <div class = "row border">
        <h1 class="col-sm-6 offset-sm-2 border-bottom pb-3 m-auto font-italic">ranking 1~3表示</h1>
    </div>
    
    <div class = "row border">
        <div class = "col-sm-6 border">
            <h>メッセージボード</h>
            <br /><br /><br /><br /><br /><br />
        </div>
        <div class = "col-sm-6 border">
            <h>username</h>
            <br />
            <h>userhighscore</h>
            <br />
            <h>ranking</h>
            <br />
            <h>usergold</h>
            <br />
            <h>has chance</h>
            <br />
        </div>
    </div>
    <div class = "row border">
        <div class = "col-sm-2 offset-sm-10 border text-right">
            <div class = "start_button p-1 border text-center">
            
            <a href="{{ route('stage.index',$user->id) }}"><h class="start_button">Start  </h><i class="fas fa-location-arrow start_button"></i></a>

            </div>
        </div>
    </div>
</div>
        