@extends('layouts.app')

@section('content')
    <div class="padding center">
        <h2 class="wide text-dark-grey">REGISTER</h2>
    </div>

    <div class="card-2 content">
        {!! Form::open(['route' => 'register', 'class' => 'form']) !!}

            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', old('name'), ['class' => 'input border', 'required']) !!}

            <div class="padding-bottom padding-top">
                {!! Form::label('gender', 'Gender') !!}
                {!! Form::select('gender', ['' => '', 'm' => 'Male', 'f' => 'Female', 'o' => 'Non-binary / Other'], null, ['class' => 'select border gender', 'required']) !!}
            </div>

            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', old('email'), ['class' => 'input border', 'required']) !!}

            {!! Form::label('password', 'Password') !!}
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
                </p>
            @endif

            <br>

            <div class="center border-top">
                <div class="padding-24">
                    {!! Form::submit('Register', ['class' => 'btn hover-dark-grey animate-opacity theme round']) !!}
                </div>

                <div class="margin-bottom">
                    <span>Already have an account?</span><br>
                    <a class="btn dark-grey round" href="{{ route('login') }}">Login</a>
                </div>
            </div>
        {!! Form::close() !!}
    </div>

    <script>
        $('select.gender option:first').attr('disabled', true);
    </script>
@endsection
