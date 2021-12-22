@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">

            </aside>
            <div class="col-sm-8">
                {{-- 投稿一覧 --}}

            </div>
        </div>
    @else
 <div class="center jumbotron bg-light">
            <div class="row  d-flex justify-content-center col-sm-6 offset-sm-3">
                <div class="col-sm-12 mt-2">
                    {!! link_to_route('login', 'Login', [], ['class' => 'btn btn-block mt-2 button_title ']) !!}
                </div>  
                <div class="col-sm-12 mt-2">
                {!! link_to_route('signup.get', 'Create Account', [], ['class' => 'btn btn-block mt-2 button_title']) !!}
                </div>
            </div>
</div>

    @endif
@endsection
