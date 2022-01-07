<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>help</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>

    <body>

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

        <div class= "bg_ranking">
            <br /><br /><br />
            <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Five Flush +200
                </div>
                <div class = "col-sm-7 ml-2 ">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                </div>
            </div>

            <div class = "row m-2 ml-5 ">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Royal Straight Flush +180
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,11].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,12].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,13].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                </div>
            </div>

            <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Back Straight Flush +170
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,7].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,8].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,9].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                </div>
            </div>
            <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Straight Flush +150
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[3,9].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,11].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,12].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,13].png') }}">
                </div>
            </div>

          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    House Flush +120
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[3,7].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,7].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,7].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,8].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,8].png') }}">
                </div>
            </div>
     
          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Five Card +100
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,14].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[2,14].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[1,14].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[1,14].png') }}">
                </div>
            </div>
      
          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Flush +85
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,7].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,13].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                </div>
            </div>
     
          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Mountain +80
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,11].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[2,12].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[1,13].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                </div>
            </div>
  
          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Back Straight +65
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,7].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,8].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[2,9].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[1,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,14].png') }}">
                </div>
            </div>
  
          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Four Card +60
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[2,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[1,10].png') }}">
                </div>
            </div>
     
          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Straight +50
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,8].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,9].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[2,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,11].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,12].png') }}">
                </div>
            </div>
     
          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Full House +40
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,11].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,11].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[4,11].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[2,14].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,14].png') }}">
                </div>
            </div>
    
          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Triple +30
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[1,10].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[2,10].png') }}">
                </div>
            </div>
    
          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    TwoPair +20
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[4,7].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[3,7].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[2,8].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[1,8].png') }}">
                </div>
            </div>
    
          <div class = "row m-2 ml-5">
                <div class = "col-sm-4 align-middle m-2 font_yellow text_shadow mt-3 ml-4">
                    Onepair +10
                </div>
                <div class = "col-sm-7 ml-2">
                    <img class="help_card_size" src="{{ asset('images/[2,7].png') }}">
                    <img class="help_card_size" src="{{ asset('images/[2,7].png') }}">
                </div>
            </div>
        <br />
        <p class="font_title text-center">通常のポーカーには存在しない役がございます。</p>  

        
            <div class="mb-2 mr-1 d-flex justify-content-center">
                <a class="return_icon p-1 mb-2" href="/"><i class=" fas fa-sign-out-alt m-2 fa-lg"></i></a>
            </div>
        <br /><br />
        </div>
        
        
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
