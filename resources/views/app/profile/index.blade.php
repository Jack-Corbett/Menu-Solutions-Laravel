@extends ('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="container card-2 leftbar">
            <h2 class="text-theme wide">PROFILE</h2>
            <p>Here you can edit your account details. Simply click edit below to update any of the information listed.</p>
        </div>
    </div>

    <div class="row-padding container">
        <br>
        <div class="third padding">
            <div class="card-2 dark-grey center padding">

                <h2 class="wide text-white" style="text-transform:uppercase">{{ $user->name }}</h2>

                <div class="display-container">
                    <img src="
                    @switch($user->gender)
                        @case('m')
                            {{ asset('img/users/male.png') }}
                            @break
                        @case('f')
                            {{ asset('img/users/female.png') }}
                            @break
                        @default
                            {{ asset('img/users/other.png') }}
                    @endswitch" class="image" style="width: 50%;">
                </div>
                <h5 class="text-white">Level {{ Auth::user()->experience }}</h5>
            </div>
        </div>

        <div class="twothird padding">
            <div class="container card-2 padding leftbar">
                <h3 class="wide text-dark-grey center">DETAILS</h3>
                <table class="table hoverable bordered">
                    <tr>
                        <th>Name</th>
                        <td>{{ $user -> name }}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{ $user -> email }}</td>
                    </tr>

                    <tr>
                        <th>Gender</th>
                        <td>
                            @switch($user -> gender)
                                @case('m')
                                Male
                                @break
                                @case('f')
                                Female
                                @break
                                @default
                                Other
                            @endswitch
                        </td>
                    </tr>

                    <tr>
                        <th>Date Joined</th>
                        <td>
                            {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}
                        </td>
                    </tr>
                </table>

                <div class="padding-32 center">
                    <a href="{{ route('dashboard.profile.edit') }}" class="btn hover-dark-grey theme round">
                        Edit
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
