@extends('layouts.app')

@section('content')
    <div class="padding center">
        <h2 class="wide text-dark-grey">LOGIN</h2>
    </div>

    <div class="card-2 content">
        {!! Form::open(['route' => 'login', 'class' => 'form']) !!}

        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', old('email'), ['class' => 'input border', 'required']) !!}


        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'input border', 'required']) !!}

        <div class="checkbox padding">
            {!! Form::checkbox('remember', old('remember') ? 'checked' : '', false, ['class' => 'margin-right check', 'id' => 'remember']) !!}
            {!! Form::label('remember', 'Remember Me', ['class' => 'validate', 'for' => 'remember']) !!}
        </div>

        @if (count($errors))
            <p class="text-red center">
                @if ($errors->has('email'))
                    {{ $errors->first('email') }}
                @endif
                @if ($errors->has('password'))
                    {{ $errors->first('password') }}
                @endif
            </p>
        @endif

        <div class="center border-top">
            <div class="padding-32">
                {!! Form::submit('Login', ['class' => 'btn hover-dark-grey animate-opacity theme round', 'style' => 'width:25%']) !!}
            </div>

            <div>
                <span>Don't have an account?</span><br>
                <a class="btn-block dark-grey round" href="{{ route('register') }}" style="width:20%">Register</a>
            </div>

            <div class="padding-16">
                <a class="btn light-grey round" href="{{ route('password.request') }}">Reset Password</a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
