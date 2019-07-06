@extends ('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="container card-2 leftbar">
            <h2 class="text-theme wide">SHOPPING LIST</h2>
            <p>Here you can see all the ingredients for the recipes in your current plan. It's divided up by category to make it easier to find everything you need.</p>
        </div>
    </div>
    <br>

    @if (count(array_merge($fruit_veg, $protein, $carbohydrates, $dairy, $other)) == 0 )
        <div class="container padding">
            <div class="card-2 grey container">
                <h3 class="text-white">No Plan Found</h3>
                <p class="text-white">Looks like you haven't generated a meal plan yet! Visit the plan page first to tell us how long you
                    have to cook and who will be eating.</p>
            </div>
        </div>
    @else
    <div class="row card-2">
        @php $i = 0 @endphp
        <div class="col l4">
            <table class="table large">
                <tr class="dark-grey">
                    <!-- Displays the full grid on desktops -->
                    <th class="border-right">Fruit and Vegetables</th>
                    <th class="border-right">Protein</th>
                <tr>

                <tr>
                    <!--Output all the fruit and vegetables-->
                    <td>
                        @foreach($fruit_veg as $ingredient)
                            @php $i++ @endphp
                            <input id='f{{ $i }}' type="checkbox" value="null" class="check">
                            <label for="f{{ $i }}" class="validate strikethrough">{{ $ingredient }}</label>
                            <br>
                        @endforeach
                        @php $i = 0 @endphp
                    </td>

                    <!--Outputs all the protein-->
                    <td>
                        @foreach($protein as $ingredient)
                            @php $i++ @endphp
                            <input id='p{{ $i }}' type="checkbox" value="null" class="check">
                            <label for="p{{ $i }}" class="validate strikethrough">{{ $ingredient }}</label>
                            <br>
                        @endforeach
                        @php $i = 0 @endphp
                    </td>
                </tr>
            </table>
        </div>

        <div class="col l5">
            <table class="table large">
                <tr class="dark-grey">
                    <th class="border-right">Carbohydrates</th>
                    <th class="border-right">Dairy</th>
                </tr>

                <tr>
                    <!--Outputs all the carbohydrates-->
                    <td>
                        @foreach($carbohydrates as $ingredient)
                            @php $i++ @endphp
                            <input id='c{{ $i }}' type="checkbox" value="null" class="check">
                            <label for="c{{ $i }}" class="validate strikethrough">{{ $ingredient }}</label>
                            <br>
                        @endforeach
                        @php $i = 0 @endphp
                    </td>

                    <!--Outputs all the dairy-->
                    <td>
                        @foreach($dairy as $ingredient)
                            @php $i++ @endphp
                            <input id='d{{ $i }}' type="checkbox" value="null" class="check">
                            <label for="d{{ $i }}" class="validate strikethrough">{{ $ingredient }}</label>
                            <br>
                        @endforeach
                        @php $i = 0 @endphp
                    </td>
                </tr>
            </table>
        </div>

        <div class="col l3">
            <table class="table large">
                <tr class="dark-grey">
                    <th>Other</th>
                </tr>
                <tr>
                    <!--Outputs all the other ingredients needed-->
                    <td>
                        @foreach($other as $ingredient)
                            @php $i++ @endphp
                            <input id='o{{ $i }}' type="checkbox" value="null" class="check">
                            <label for="o{{ $i }}" class="validate strikethrough">{{ $ingredient }}</label>
                            <br>
                        @endforeach
                        @php $i = 0 @endphp
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    @endif
@endsection