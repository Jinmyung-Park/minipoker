<header class="m-auto">
 
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark d-flex justify-content-center">

        <a class="navbar-brand" href="/"><i class="fas fa-home fa-lg m-2"></i></a>
        <a class="navbar-brand" href="/"><i class="far fa-id-card fa-lg m-2"></i></a>
        <a class="navbar-brand" href="/"><i class="fas fa-shopping-cart fa-lg m-2"></i></a>
        <a class="navbar-brand" href="/"><i class="fas fa-question-circle fa-lg m-2"></i></a>
        <a class="navbar-brand" href="/"><i class="fas fa-trophy fa-lg m-2"></i></a>
        
        @if (Auth::check())
        
            <div class = "navbar-brand">
            <a href="{{ route('logout.get') }}"><i class=" fas fa-sign-out-alt m-2 fa-lg"></i></a>
            </div>
    </nav>           
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark d-flex justify-content-center border-top">
            <a2 class="username">Username : {!!$user->name!!}</a2>
    </nav>

        @endif
        
     

</header>