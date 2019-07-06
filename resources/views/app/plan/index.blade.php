@extends ('layouts.app')

@section('style')
    .day {
    display: none;
    }
@endsection

@section('content')
    <br>
    <div class="container">
        <div class="container card-2 leftbar">
            <h2 class="text-theme wide">MEAL PLAN</h2>
            <p>Tick which family members are eating and select how long you have to cook each day. We will use this to generate your meal plan for the coming week.</p>
        </div>
    </div>
    <br>

    {!! Form::open(['route' => 'dashboard.plan.store']) !!}

    <div class="card-2">
        <ul class="navbar dark-grey">
            <li><a href="javascript:" class="tab bar-item theme-d1" onclick="openDay(event, '1');">Monday</a></li>
            <li><a href="javascript:" class="tab bar-item" onclick="openDay(event, '2');">Tuesday</a></li>
            <li><a href="javascript:" class="tab bar-item" onclick="openDay(event, '3');">Wednesday</a></li>
            <li><a href="javascript:" class="tab bar-item" onclick="openDay(event, '4');">Thursday</a></li>
            <li><a href="javascript:" class="tab bar-item" onclick="openDay(event, '5');">Friday</a></li>
            <li><a href="javascript:" class="tab bar-item" onclick="openDay(event, '6');">Saturday</a></li>
            <li><a href="javascript:" class="tab bar-item" onclick="openDay(event, '7');">Sunday</a></li>
        </ul>

        <!-- Loops through the days of the week -->
        @for ($i = 1; $i < 8; $i++)
            <div id="{{ $i }}" class="container day">
                <p>Select who will be eating: </p>

                <div class="container">
                    @php
                        $count = 0;
                    @endphp
                    @foreach ($members as $member)
                        @php
                            if($count % 5 == 0 || $count == 0) echo '<div class="row">';
                            $count ++;
                        @endphp
                        <div class="col l3 m6 card-2">
                            <div class="row padding-8">
                                <div class="col l3 m3 s3 center">
                                    @include('layouts.user')
                                </div>

                                <div class="col l9 m9 s9 margin-top">
                                    {!! Form::checkbox($i.'[]', $member->id, true, ['class' => 'margin-right check', 'id' => $i . '.' . $count]) !!}
                                    <label for="{{ $i . '.' . $count }}" class="validate large">{{ $member->name }}</label>
                                </div>
                            </div>
                        </div>
                        @if($count % 4 == 0)
                            @php echo '<br><br><br></div>' @endphp
                        @endif
                    @endforeach
                    @if($count < 4)
                        @php echo '<br><br><br></div>' @endphp
                    @endif
                </div>

                <p>Select the number of minutes you have available to cook: </p>

                <div class="container">
                    <div class="half">
                        {!! Form::select($i.'time', [90 => 90, 60 => 60, 30 => 30], null, ['class' => 'select border']) !!}
                    </div>
                </div>
                <br><br>
            </div>
        @endfor
    </div>
    <!-- Check if the plan has been deleted and output message -->

    <div class="center padding-32">
        {!! Form::submit('Generate Meal Plan', ['class' => 'btn theme hover-dark-grey animate-opacity round']) !!}
    </div>

    {!! Form::close() !!}
    <!-- Add button for deleting current plan -->
@endsection

@section('scripts')
    <script>
        function openDay(evt, dayName) {
            let i = void 0,
                x = void 0,
                tabs = void 0;
            x = document.getElementsByClassName("day");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tabs = document.getElementsByClassName("tab");
            for (i = 0; i < x.length; i++) {
                tabs[i].className = tabs[i].className.replace(" theme-d1", "");
            }
            document.getElementById(dayName).style.display = "block";
            evt.currentTarget.className += " theme-d1";
        }
        document.getElementById("1").style.display = "block";
    </script>
@endsection