@if($stageCheck -> cardOpenCheck !== 0)

    @if($randomCard[2] == 4)
        @if($randomCard[7] == 14)
            <img class="card_size" src="{{ asset('images/[4,14].png') }}" alt="card3">  
        @elseif($randomCard[7] == 13)
            <img class="card_size" src="{{ asset('images/[4,13].png') }}" alt="card3">  
        @elseif($randomCard[7] == 12)
            <img class="card_size" src="{{ asset('images/[4,12].png') }}" alt="card3">  
        @elseif($randomCard[7] == 11)
            <img class="card_size" src="{{ asset('images/[4,11].png') }}" alt="card3">  
        @elseif($randomCard[7] == 10)
            <img class="card_size" src="{{ asset('images/[4,10].png') }}" alt="card3">  
        @elseif($randomCard[7] == 9)
            <img class="card_size" src="{{ asset('images/[4,9].png') }}" alt="card3">  
        @elseif($randomCard[7] == 8)
            <img class="card_size" src="{{ asset('images/[4,8].png') }}" alt="card3">  
        @elseif($randomCard[7] == 7)
            <img class="card_size" src="{{ asset('images/[4,7].png') }}" alt="card3">  
        @endif

        
    @elseif($randomCard[2] == 3)
        @if($randomCard[7] == 14)
            <img class="card_size" src="{{ asset('images/[3,14].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 13)
            <img class="card_size" src="{{ asset('images/[3,13].png') }}" alt="card3">  
        @elseif($randomCard[7] == 12)
            <img class="card_size" src="{{ asset('images/[3,12].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 11)
            <img class="card_size" src="{{ asset('images/[3,11].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 10)
            <img class="card_size" src="{{ asset('images/[3,10].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 9)
            <img class="card_size" src="{{ asset('images/[3,9].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 8)
            <img class="card_size" src="{{ asset('images/[3,8].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 7)
            <img class="card_size" src="{{ asset('images/[3,7].png') }}" alt="card3"> 
        @endif

    
    @elseif($randomCard[2] == 2)
        @if($randomCard[7] == 14)
            <img class="card_size" src="{{ asset('images/[2,14].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 13)
            <img class="card_size" src="{{ asset('images/[2,13].png') }}" alt="card3">  
        @elseif($randomCard[7] == 12)
            <img class="card_size" src="{{ asset('images/[2,12].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 11)
            <img class="card_size" src="{{ asset('images/[2,11].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 10)
            <img class="card_size" src="{{ asset('images/[2,10].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 9)
            <img class="card_size" src="{{ asset('images/[2,9].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 8)
            <img class="card_size" src="{{ asset('images/[2,8].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 7)
            <img class="card_size" src="{{ asset('images/[2,7].png') }}" alt="card3"> 
        @endif

    
    @elseif($randomCard[2] == 1)
        @if($randomCard[7] == 14)
            <img class="card_size" src="{{ asset('images/[1,14].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 13)
            <img class="card_size" src="{{ asset('images/[1,13].png') }}" alt="card3">  
        @elseif($randomCard[7] == 12)
            <img class="card_size" src="{{ asset('images/[1,12].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 11)
            <img class="card_size" src="{{ asset('images/[1,11].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 10)
            <img class="card_size" src="{{ asset('images/[1,10].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 9)
            <img class="card_size" src="{{ asset('images/[1,9].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 8)
            <img class="card_size" src="{{ asset('images/[1,8].png') }}" alt="card3"> 
        @elseif($randomCard[7] == 7)
            <img class="card_size" src="{{ asset('images/[1,7].png') }}" alt="card3"> 
        @endif
    @endif

@endif 