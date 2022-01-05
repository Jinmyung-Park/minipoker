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
{{--
    <script type="text/javascript">     //戻るボタン対策
    history.pushState(null, null, "/poker"); 
    window.onpopstate = function(event) { history.go(1); };
    </script>
--}}


        @include('stage.navbar')
        <div class="container">
            <br />
            <div class="allClear m-auto p-2">
                <div class="text-center mt-2">
                    <br />
                    <h2 class="col-sm-10 offset-sm-2 border-bottom pb-3 m-auto font-italic text_shadow">おめでとうございます！</h2>
                    <div class="font_skyblue text_shadow">
                        <h4>全ステージをクリアしました！</h4>
                        あなたの最終スコアは <span class="font_yellow">{!!$stageCheck->score!!}</span> です。
                    </div>
                    
                    <img class="logo mt-2" src="{{ asset('images/title.png') }}" alt="title">
              
              
                    <div class="row col-sm-12 m-auto d-flex justify-content-center">
                        <a class="gameover_icon2 p-1 mb-4" href="/"><i class=" fas fa-home m-2 fa-lg"></i></a>
                    </div>
                    
                    @if($stageCheck->score > $stageCheck->highscore)
                        <div class="highscore  m-auto d-flex justify-content-center">
                            HighScore!!!
                        </div>
                    @endif
                    
                    @include('commons.message')
                    
                </div>
            </div>
        </div>
        
        <br />
        
        @include('layouts.footer')
 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>

    </body>
</html>
