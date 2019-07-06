<div id="update{{ $member->id }}" class="modal">
    <div class="modal-content card-4 animate-zoom">
        <header class="container dark-grey">
                <span onclick="document.getElementById('update{{ $member->id }}').style.display='none'"
                      class="closebtn padding-top hover-text-red"><i class="fas fa-times large"></i></span>
            <h3 class="text-white center wide">EDIT MEMBER</h3>
        </header>

        {!! Form::model($member,['method' => 'patch', 'route' => 'dashboard.group.edit', 'class' => 'form']) !!}
            {!! Form::hidden('id', $member->id) !!}

            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', old('name'), ['class' => 'input border', 'required']) !!}

            <div class="padding-bottom padding-top">
                {!! Form::label('gender', 'Gender') !!}
                {!! Form::select('gender', ['' => '', 'm' => 'Male', 'f' => 'Female', 'o' => 'Non-binary / Other'], null, ['class' => 'select border gender', 'required']) !!}
            </div>

            <br>

            <div class="center border-top padding-16">
                {!! Form::submit('Update', ['class' => 'btn hover-dark-grey animate-opacity theme round', 'style' => 'width:20%']) !!}
            </div>
        {!! Form::close() !!}

        <script>
            $('select.gender option:first').attr('disabled', true);
        </script>
    </div>
</div>