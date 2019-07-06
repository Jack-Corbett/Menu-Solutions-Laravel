@extends ('layouts.app')

@section('content')
    <br>
    <div class="container">
        <div class="container card-2 leftbar">
            <h2 class="text-theme wide">ADMIN</h2>
            <p>With great power comes great responsibility! You have been entrusted with admin privileges which enables you
            to add recipes directly to Menu Solutions that will be selected by the planning system.</p>
        </div>
    </div>
    <br>

    <div class="card-2">
        {!! Form::open(['class' => 'form']) !!}
            <div class="row">
                <div class="half container">
                    <h5 class="wide border-top padding-top text-dark-grey">DETAILS</h5>
                        <div class="row-padding">
                        {!! Form::label('name', 'Recipe Name') !!}
                        {!! Form::text('name', null, ['class' => 'input border', 'required']) !!}

                        {!! Form::label('description', 'Description') !!}
                        {!! Form::text('description', null, ['class' => 'input border']) !!}

                        <div class="padding-bottom padding-top row">
                            <span class='col l3 m6 s6'>Cook Time (minutes)</span>
                            {!! Form::selectRange('time', 10, 90, ['class' => 'col rest select border']) !!}
                        </div>

                        <div class="padding-bottom">
                            {!! Form::label('serves', 'Serves', ['class' => 'col l3 m6 s6']) !!}
                            {!! Form::selectRange('serves', 1, 6, ['class' => 'col rest select border']) !!}
                        </div>
                    </div>

                    <h5 class="wide border-top padding-top text-dark-grey">INSTRUCTIONS</h5>
                    <div class="row-padding">
                        <div id="instructions">
                            {!! Form::label('instruction1', '1') !!}
                            {!! Form::textarea('instruction1', null, ['class' => 'input border', 'ROWS' => '2']) !!}

                            <label>2</label>
                            {!! Form::textarea('instruction2', null, ['class' => 'input border', 'ROWS' => '2']) !!}
                        </div>
                        <div class="padding-16 center">
                            <a id="addInstruction" class="btn-floating theme hover-dark-grey"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="half container">
                    <h5 class="wide border-top padding-top text-dark-grey">INGREDIENTS</h5>
                    <div id="ingredients">
                        <div class="row-padding">
                            <div class="third">
                                {!! Form::label('ingredientName1', 'Name') !!}
                                {!! Form::text('ingredientName1', null, ['class' => 'input border']) !!}
                            </div>

                            <div class="third">
                                {!! Form::label('ingredientMeasurement1', 'Measurement') !!}
                                {!! Form::text('ingredientMeasurement1', null, ['class' => 'input border']) !!}
                            </div>

                            <div class="third">
                                {!! Form::label('ingredientQuantity1', 'Quantity') !!}
                                {!! Form::text('ingredientQuantity1', null, ['class' => 'input border']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="container padding-16 center">
                        <a id="addIngredient" class="btn-floating theme hover-dark-grey"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="center border-top padding-16">
                {!! Form::submit('Submit Recipe', ['class' => 'btn theme animate-opacity round hover-dark-grey']) !!}
            </div>
        {!! Form::close() !!}
    </div>
    <br>
@endsection

@section('scripts')
    <script>
        var instructCount = 2;
        var ingredientCount = 1;
        $(document).ready(function() {
            $("#addInstruction").click(function() {
                instructCount ++;
                $("#instructions").append("<label>" + instructCount + "<\label> " +
                    "<textarea name=\"instruction" + instructCount + "\" class=\"input border\" rows=\"2\"></textarea>");
            });
            $("#addIngredient").click(function() {
                ingredientCount ++;
                $("#ingredients").append("<br><div class=\"row-padding\">" +
                    "<div class=\"third\">\n" +
                    "<label>Name</label>" +
                    "<input class=\"input border\" name=\"ingredientName" + ingredientCount + "\" type=\"text\">\n" +
                    "</div>\n" +
                    "<div class=\"third\">\n" +
                    "<label>Measurement</label>" +
                    "<input class=\"input border\" name=\"ingredientMeasurement" + ingredientCount + "\" type=\"text\">\n" +
                    "</div>\n" +
                    "<div class=\"third\">\n" +
                    "<label>Quantity</label>" +
                    "<input class=\"input border\" name=\"ingredientQuantity" + ingredientCount + "\" type=\"text\">\n" +
                    "</div></div>")
            });
        });
    </script>
@endsection