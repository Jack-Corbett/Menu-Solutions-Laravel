<div id="add" class="modal">
    <div class="modal-content card-4 animate-zoom">
        <header class="container dark-grey">
                <span onclick="document.getElementById('add').style.display='none'"
                      class="closebtn padding-top hover-text-red"><i class="fas fa-times large"></i></span>
            <h3 class="text-white center wide">ADD MEMBER</h3>
        </header>

        {!! Form::open(['route' => 'dashboard.group.create', 'class' => 'form']) !!}

            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', old('name'), ['class' => 'input border', 'required']) !!}

            <div class="padding-bottom padding-top">
                {!! Form::label('gender', 'Gender') !!}
                {!! Form::select('gender', ['' => '', 'm' => 'Male', 'f' => 'Female', 'o' => 'Non-binary / Other'], null, ['class' => 'select border gender', 'required']) !!}
            </div>

            <br>

            <div class="center border-top padding-16">
                {!! Form::submit('Add', ['class' => 'btn hover-dark-grey animate-opacity theme round']) !!}
            </div>
        {!! Form::close() !!}

        <script>
            $('select.gender option:first').attr('disabled', true);
        </script>
    </div>
</div>
