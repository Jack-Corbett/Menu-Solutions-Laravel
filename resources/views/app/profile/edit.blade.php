@extends ('layouts.app')

@section('content')
    <div class="padding center">
        <h2 class="wide text-dark-grey">EDIT DETAILS</h2>
    </div>

    <div class="card-2 content">
        {!! Form::model($user,['method' => 'post', 'route' => 'dashboard.profile.update', 'class' => 'form']) !!}

            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', old('name'), ['class' => 'input border', 'required']) !!}

            <div class="padding-bottom padding-top">
                {!! Form::label('gender', 'Gender') !!}
                {!! Form::select('gender', ['' => '', 'm' => 'Male', 'f' => 'Female', 'o' => 'Non-binary / Other'], null, ['class' => 'select border gender', 'required']) !!}
            </div>

            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', old('email'), ['class' => 'input border', 'required']) !!}

            <p class="text-red center">
            @foreach ($errors->all() as $error)
                {{ $error }} <br>
            @endforeach </p>

            <br>

            <div class="center border-top padding-16">
                {!! Form::submit('Update', ["class" => "btn hover-dark-grey animate-opacity theme round"]) !!}
            </div>

        {!! Form::close() !!}
    </div>

    <script>
        $('select.gender option:first').attr('disabled', true);
    </script>
@endsection
