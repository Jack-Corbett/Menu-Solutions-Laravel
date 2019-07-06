@extends ('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="container card-2 leftbar">
            <h2 class="text-theme wide" style="text-transform:uppercase">{{ $recipe->name }}</h2>
            <p>{{ $recipe->description }}</p>
            <p class="large"><i class="far fa-clock"></i> {{ $recipe->time }} minutes</p>
        </div>
    </div>
    <br>

    <div class="row container">
        <div class="third padding">
            <div class="card-2 padding">
                <h3 class="text-theme">Ingredients</h3>
                <ul class="ul">
                    @foreach($ingredients_output as $ingredient)
                        <li>{{ $ingredient }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="twothird padding">
            <div class="card-2 padding">
                <h3 class="text-theme">Instructions</h3>
                <p class="container">{!! nl2br($recipe->instructions) !!}</p>
            </div>
        </div>
    </div>
@endsection