<div id="delete{{ $member->id }}" class="modal">
    <div class="modal-content card-4 animate-zoom">
        <header class="container dark-grey">
                <span onclick="document.getElementById('delete{{ $member->id }}').style.display='none'"
                      class="closebtn padding-top hover-text-red"><i class="fas fa-times large"></i></span>
            <h3 class="text-white center wide">DELETE MEMBER</h3>
        </header>

        {!! Form::model($member,['method' => 'delete', 'route' => 'dashboard.group.destroy', 'class' => 'form center']) !!}
            {!! Form::hidden('id', $member->id) !!}

            <p>Are you sure you want to delete {{ $member->name }}?</p>

            <p class="content pale-red text-grey"><b>Warning!</b> This cannot be undone.</p>

            <div class="padding-16">
                {!! Form::button('<i class="fas fa-check padding"></i>', ['type' => 'submit',
                    'class' => 'btn hover-dark-grey theme round-xlarge']) !!}

                <a onclick="document.getElementById('delete{{ $member->id }}').style.display='none'"
                   class="btn hover-dark-grey red round-xlarge"><i class="fas fa-times padding"></i></a>
            </div>
        {!! Form::close() !!}
    </div>
</div>