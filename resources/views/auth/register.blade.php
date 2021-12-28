@extends('layouts.app')

@section('content')
    <div class='bg-light login_border'>
    <div class="row m-2">
        <div class="col-sm-6 offset-sm-3 ">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Username', ['class' => 'login_label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email', ['class' => 'login_label']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password',['class' => 'login_label']) !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Confirmation', ['class' => 'login_label']) !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}


                {!! Form::submit('Sign up', ['class' => 'mt-2 pt-2 pb-2 btn-block login_button']) !!}

            {!! Form::close() !!}
                {!! link_to_route('login', 'Login', [], ['class' => 'btn-block login_button text-center']) !!}
                {!! link_to_route('home', 'Cancel', [], ['class' => 'btn-block cancel_button text-center']) !!}
                
                </div>
        </div>
    </div>
    </div>
@endsection