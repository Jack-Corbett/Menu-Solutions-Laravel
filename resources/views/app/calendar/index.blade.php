@extends ('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="container card-2 leftbar">
            <h2 class="text-theme wide">CALENDAR</h2>
            <p>Here you can view your meal plan for the week with the number of people eating each day on the side.
                Simply click the recipe for today and get cooking.</p>
        </div>
    </div>
    <br>

    @if (count($recipes) == 0)
        <div class="container padding">
            <div class="card-2 grey container">
                <h3 class="text-white">No Plan Found</h3>
                <p class="text-white">Looks like you haven't generated a meal plan yet! Visit the plan page first to tell us how long you
                have to cook and who will be eating.</p>
            </div>
        </div>
    @endif

    <!-- Meal Plan table -->
    <ul class="ul card-2">
        @foreach ($recipes as $recipe)
            <li class="row">
                <div class="col l2 m3 margin-top">
                    <span class="large margin">{{ \Carbon\Carbon::parse($recipe->pivot->date)->format('l jS') }}</span>
                </div>

                <div class="col l7 m5 padding">
                    <a href="{{ route('dashboard.recipes.show', [$recipe->id, $recipe->pivot->number_eating]) }}" class="btn dark-grey hover-theme round"
                       style="text-decoration:none">{{ $recipe->name }}</a>
                </div>

                <div class="col l3 m4 padding">
                    @for ($i = 1; $i < $recipe->pivot->number_eating + 1; $i++)
                        @if (fmod($i, 6) == 0) <br>
                        @endif
                        <img src="{{ asset('img/users/other.png') }}" class="margin-right" style="width:40px">
                    @endfor
                </div>
            </li>
        @endforeach
    </ul>
    <br>
@endsection