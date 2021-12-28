@if($stageCheck -> cardOpenCheck !== 0)

    @if($randomCard[0] == 4)
        @if($randomCard[5] == 14)
            <img class="card_size" src="{{ asset('images/[4,14].png') }}" alt="card1">  
        @elseif($randomCard[5] == 13)
            <img class="card_size" src="{{ asset('images/[4,13].png') }}" alt="card1">  
        @elseif($randomCard[5] == 12)
            <img class="card_size" src="{{ asset('images/[4,12].png') }}" alt="card1">  
        @elseif($randomCard[5] == 11)
            <img class="card_size" src="{{ asset('images/[4,11].png') }}" alt="card1">  
        @elseif($randomCard[5] == 10)
            <img class="card_size" src="{{ asset('images/[4,10].png') }}" alt="card1">  
        @elseif($randomCard[5] == 9)
            <img class="card_size" src="{{ asset('images/[4,9].png') }}" alt="card1">  
        @elseif($randomCard[5] == 8)
            <img class="card_size" src="{{ asset('images/[4,8].png') }}" alt="card1">  
        @elseif($randomCard[5] == 7)
            <img class="card_size" src="{{ asset('images/[4,7].png') }}" alt="card1">  
        @endif

        
    @elseif($randomCard[0] == 3)
        @if($randomCard[5] == 14)
            <img class="card_size" src="{{ asset('images/[3,14].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 13)
            <img class="card_size" src="{{ asset('images/[3,13].png') }}" alt="card1">  
        @elseif($randomCard[5] == 12)
            <img class="card_size" src="{{ asset('images/[3,12].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 11)
            <img class="card_size" src="{{ asset('images/[3,11].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 10)
            <img class="card_size" src="{{ asset('images/[3,10].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 9)
            <img class="card_size" src="{{ asset('images/[3,9].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 8)
            <img class="card_size" src="{{ asset('images/[3,8].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 7)
            <img class="card_size" src="{{ asset('images/[3,7].png') }}" alt="card1"> 
        @endif

    
    @elseif($randomCard[0] == 2)
        @if($randomCard[5] == 14)
            <img class="card_size" src="{{ asset('images/[2,14].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 13)
            <img class="card_size" src="{{ asset('images/[2,13].png') }}" alt="card1">  
        @elseif($randomCard[5] == 12)
            <img class="card_size" src="{{ asset('images/[2,12].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 11)
            <img class="card_size" src="{{ asset('images/[2,11].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 10)
            <img class="card_size" src="{{ asset('images/[2,10].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 9)
            <img class="card_size" src="{{ asset('images/[2,9].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 8)
            <img class="card_size" src="{{ asset('images/[2,8].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 7)
            <img class="card_size" src="{{ asset('images/[2,7].png') }}" alt="card1"> 
        @endif

    
    @elseif($randomCard[0] == 1)
        @if($randomCard[5] == 14)
            <img class="card_size" src="{{ asset('images/[1,14].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 13)
            <img class="card_size" src="{{ asset('images/[1,13].png') }}" alt="card1">  
        @elseif($randomCard[5] == 12)
            <img class="card_size" src="{{ asset('images/[1,12].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 11)
            <img class="card_size" src="{{ asset('images/[1,11].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 10)
            <img class="card_size" src="{{ asset('images/[1,10].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 9)
            <img class="card_size" src="{{ asset('images/[1,9].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 8)
            <img class="card_size" src="{{ asset('images/[1,8].png') }}" alt="card1"> 
        @elseif($randomCard[5] == 7)
            <img class="card_size" src="{{ asset('images/[1,7].png') }}" alt="card1"> 
        @endif
    @endif

@endif 