<img src="
@if ($member->gender == 'm') {{ asset('img/users/male.png') }}
@elseif ($member->gender == 'f') {{ asset('img/users/female.png') }}
@else {{ asset('img/users/other.png') }}
@endif" class="image" style="width:60px">