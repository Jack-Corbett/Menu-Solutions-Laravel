@extends('layouts.app')

@section('content')
    <div class="padding center">
        <h2 class="wide text-dark-grey">RESET PASSWORD</h2>
    </div>

    <div class="card-2 content">
        @if (session('status'))
            <div class="text-theme center">
                {{ session('status') }}
            </div>
        @endif

        {!! Form::open(['route' => 'password.email', 'class' => 'form']) !!}

            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', old('email'), ['class' => 'input border', 'required']) !!}

            @if ($errors->has('email'))
                <p class="text-red center">{{ $errors->first('email') }}</p>
            @endif

            <br>

            <div class="center border-top padding-32">
                {!! Form::submit('Send Reset Link', ['class' => 'btn hover-dark-grey animate-opacity theme round']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection
