@extends('layouts.app')

@section('content')
    <div class="padding center">
        <h2 class="wide text-dark-grey">CHANGE PASSWORD</h2>
    </div>

    <div class="card-2 content">
        {!! Form::open(['route' => 'password.request', 'class' => 'form']) !!}
            {!! Form::hidden('token', $token) !!}

            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', $email ?? old('email'), ['class' => 'input border', 'required']) !!}

            {!! Form::label('password', 'New Password') !!}
            {!! Form::password('password', ['class' => 'input border', 'required']) !!}

            {!! Form::label('password_confirmation', 'Confirm Password') !!}
            {!! Form::password('password_confirmation', ['class' => 'input border', 'required']) !!}

            @if (count($errors))
                <p class="text-red center">
                    @if ($errors->has('email'))
                        {{ $errors->first('email') }} <br>
                    @endif
                    @if ($errors->has('password'))
                        {{ $errors->first('password') }} <br>
                    @endif
                    @if ($errors->has('password_confirmation'))
                        {{ $errors->first('password_confirmation') }} <br>
                    @endif
                </p>
            @endif

            <div class="padding-32">
                {!! Form::submit('Change Password', ['class' => 'btn hover-dark-grey animate-opacity theme round']) !!}
            </div>
        {!! Form::close() !!}
    </div>
@endsection