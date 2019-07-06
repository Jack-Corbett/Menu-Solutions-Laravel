@extends ('layouts.app')

@section('content')
    <div class="row-padding container">
        <br>
        <div class="third">
            <div class="card-4 center padding">
                <h1 class="wide text-dark-grey" style="text-transform:uppercase">{{ Auth::user()->name }}</h1>

                <div class="display-container">
                    <img src="{{ asset('img/ranks/1.png') }}" class="image" style="width: 50%;">
                </div>

                <h4>Rank: Sandwich Maker</h4>
                <div class="padding">
                    <div class="light-grey round">
                        <div class="container round theme" style="height:20px;width:0"></div>
                    </div>
                </div>
                <p>Level {{ Auth::user()->experience }}</p>

                <hr>

                <h4>Achievements:</h4>
                <p>Nothing to show yet. Time to get cooking!</p>

            </div>
            <br>
        </div>

        <div class="twothird">
            <div class="container card-2 padding leftbar">
                <h2 class="text-theme wide">GETTING STARTED</h2>
                    <p>Welcome to Menu Solutions, thank you for joining us.</p>
                    <p>This is your dashboard where you can see your current rank, achievements and your meal planning group. Once you've added your crew below, head over to the plan page to tell us how long you have to cook and who will be eating each day. You can then find your meal plan on the calendar page and see the ingredients you need on the list page.</p>
            </div>

            <br>

            <div class="container card-2 padding leftbar">
                <h2 class="text-theme wide">GROUP</h2>
                <p>To add a member to your group just click the plus below. Your group will be used on the plan page to tell us who will be eating each day.</p>

                <ul class="ul card-2 animate-opacity">
                    @foreach($members as $member)
                        <li class="row">
                            <div class="col l1 m2 s3">
                                @include('layouts.user')
                            </div>

                            <div class="col l9 m7 s6 margin-top">
                                <span class="large">{{ $member->name }}</span>
                            </div>

                            <div class="col l2 m3 s3 margin-top right-align">
                                @if(!$loop->first)
                                    <a href="javascript:" class="margin-right"
                                       onclick="document.getElementById('update{{ $member->id }}').style.display='block'">
                                        <i class="fas fa-pencil-alt hover-text-blue large"></i></a>

                                    <a href="javascript:" class="margin-right"
                                       onclick="document.getElementById('delete{{ $member->id }}').style.display='block'">
                                        <i class="fas fa-times hover-text-red large"></i></a>
                                @endif
                            </div>
                            @include('app.group.destroy')
                            @include('app.group.edit')
                        </li>
                    @endforeach
                </ul>

                <br>

                <div class="container center">
                    <a class="btn-floating theme hover-dark-grey"
                       onclick="document.getElementById('add').style.display='block'"><i class="fas fa-plus"></i>
                    </a>
                </div>

                @include('app.group.create')
            </div>
        </div>
    </div>
    <br>
@endsection
