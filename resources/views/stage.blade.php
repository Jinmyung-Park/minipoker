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

    <script type="text/javascript">     //戻るボタン対策
    history.pushState(null, null, "/poker"); 
    window.onpopstate = function(event) { history.go(1); };
    </script>



        @include('stage.navbar')
        <div class="container">

        @if($stageCheck -> cardOpenCheck == 0)
            @include('stage.cardDisplayTop')
            @include('stage.cardOpen')
        
        @else
            {{--include cardDisplay(opend)--}}
            @include('stage.cardDisplayTopAfter')
            
            @if($stageCheck -> cardDetermine == 0)
                @include('stage.cardDisplayBottom')     {{--after open card--}}
                @include('stage.cardDetermine')
            @else
                {{$result}}
            @endif

        @endif
        </div>
        
        <br />
        
        @include('layouts.footer')
 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>

    </body>
</html>
