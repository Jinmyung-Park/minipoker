<header class="mb-4">
 
    <nav class="navbar navbar-expand-sm stage_navbar d-flex">
        
        <a class="navbar-brand" href="/"><i class="fas fa-home fa-lg "></i></a>
        
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle mr-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-question-circle fa-lg"></i>
            </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">      {{--card 説明--}}
                      @include('stage.help')
                </div>

        </div>
        @if($stageCheck->stage<=40)
        <i class="fas fa-running mr-2"></i><h class="mr-5">{!!$stageCheck->stage!!}</h>   
        @else
        <i class="fas fa-running mr-2"></i><h class="mr-5">ALL CLEAR</h>   
        @endif
        <i class="fas fa-star mr-2"></i><h>{!!$stageCheck->score!!}</h>

    </nav>
       
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark d-flex justify-content-center border-top">
        <a2 class="username">Username : {!!$user->name!!}</a2>
    </nav>
</header>