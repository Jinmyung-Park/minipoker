<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Original Service</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>

    <body>

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

        <div class="container">
            <br />
            <div class="col-md-12 bg_ranking p-2 m-auto">
    
                    <div class = "row mt-4">
                        <h5 class="col-sm-8 offset-sm-2 m-auto font-italic">
                            <div class = "ranking_title text_shadow p-3">
                                <h5>Ranking</h5>
                            </div>
                    </div>
                    
                <div class = "row col-sm-12">

                    <div class = "rank_frame col-sm-5 mt-2">
 
                        <i class="fas fa-trophy m-1 ranking_icon1"></i>
                        <span class = "font_yellow text_shadow">{!!($counter[0])!!}</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class = "font_skyblue text_shadow">{!!$userRanking[$counter[0]-1]->name!!}</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class = "font_white text_shadow">{!!$userRanking[$counter[0]-1]->highscore!!}</span>
                        <br />
                        
                        @while($counter[0]<=17 && ($counter[0]+1)<$counter[2])
                            
                            @if($counter[0]<=3)
                                <i class="fas fa-trophy m-1 ranking_icon1"></i>
                            @elseif($counter[0]<=9)
                                <i class="fas fa-trophy m-1 ranking_icon2"></i>
                            @elseif($counter[0]<=17)
                                <i class="fas fa-trophy m-1 ranking_icon3"></i>
                            @endif
                                
                            <span class = "font_yellow text_shadow">{!!($counter[0] = $counter[0]+2)!!}</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class = "font_skyblue text_shadow">{!!$userRanking[$counter[0]-1]->name!!}</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class = "font_white text_shadow">{!!$userRanking[$counter[0]-1]->highscore!!}</span>
                            <br />
                            
                        @endwhile
                    </div>

                    <div class = "rank_frame mt-2 col-sm-5">
 
                        <i class="fas fa-trophy m-1 ranking_icon1"></i>
                        <span class = "font_yellow text_shadow">{!!($counter[1])!!}</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class = "font_skyblue text_shadow">{!!$userRanking[$counter[1]-1]->name!!}</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class = "font_white text_shadow">{!!$userRanking[$counter[1]-1]->highscore!!}</span>
                        <br />
                        
                        @while($counter[1]<=18 && ($counter[1]+1)<$counter[2])
    
                            @if($counter[1]<=4)
                                <i class="fas fa-trophy m-1 ranking_icon1"></i>
                            @elseif($counter[1]<=10)
                                <i class="fas fa-trophy m-1 ranking_icon2"></i>
                            @elseif($counter[1]<=18)
                                <i class="fas fa-trophy m-1 ranking_icon3"></i>
                            @endif
                            
                            <span class = "font_yellow text_shadow">{!!($counter[1] = $counter[1]+2)!!}</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class = "font_skyblue text_shadow">{!!$userRanking[$counter[1]-1]->name!!}</span>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class = "font_white text_shadow">{!!$userRanking[$counter[1]-1]->highscore!!}</span>
                            <br />
                            
                        @endwhile
                    </div>
                </div>
                        <div class="mt-2 mb-3 mr-1 d-flex justify-content-center">
                         <a class="return_icon p-1 mb-2" href="/"><i class=" fas fa-sign-out-alt m-2 fa-lg"></i></a>
                        </div>
                        <br />
            </div>
        </div>
   
        <br />
        @include('layouts.footer')

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        

<script type="text/javascript">     //戻るボタン対策
history.pushState(null, null, "/poker"); 
window.onpopstate = function(event) { history.go(1); };
</script>

    </body>
</html>
