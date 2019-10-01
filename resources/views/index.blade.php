@extends('layouts.image')

@section('content')
    <style>
        /* Chopping Board Background */
        .bgimg-1 {
            background-image: url({{ asset('img/backgrounds/choppingboard.jpg') }});
            min-height: 100%;
        }
        @media screen and (min-width: 500px) {
            .svg {
                width:75%;
            }
        }
    </style>

    <div class="bgimg-1 display-container" style="white-space:nowrap;">
        <div class="animate-opacity">
            <img src="{{ asset('img/logo-black.png') }}" height="150px" class="display-middle-above circle" alt="Knife and Fork on a black background">

            <img src="{{ asset('img/scale-logo.svg') }}" class="display-middle svg" alt="White transparent Menu Solutions Logo">

            <a href="{{ route('register') }}" class="display-middle-below btn large hover-white theme round">START EATING SMARTER</a>
        </div>
    </div>

    <div class="container center">
        <h2 class="wide text-dark-grey" style="text-transform:uppercase">Simple Steps to a Healthy Diet</h2>
    </div>

    <div class="padding-bottom container center dark-grey">
        <div class="quarter padding">
            <h3 class="text-white wide">TELL US WHEN</h3>
            <img src="{{ asset('img/clock.png') }}" class="image" style="width:80%" alt="clock icon">
            <p>Tell us how much time you have to cook each night along with who will be eating and we will craft you a meal plan</p>
        </div>

        <div class="quarter padding">
            <h3 class="text-white wide">GENERATE CALENDAR</h3>
            <img src="{{ asset('img/calendar.png') }}" class="image" style="width:80%" alt="calendar icon">
            <p>View your meal plan for the week with quick access to every recipe with ingredients and simple instructions listed</p>
        </div>

        <div class="quarter padding">
            <h3 class="text-white wide">SHOPPING LIST</h3>
            <img src="{{ asset('img/list.png') }}" class="image" style="width:80%" alt="list icon">
            <p>Grab the ingredients using your categorised shopping list with everything you need for that weeks recipes</p>
        </div>

        <div class="quarter padding">
            <h3 class="text-white wide">COOKING TIME</h3>
            <img src="{{ asset('img/platekf.png') }}" class="image" style="width:80%" alt="plate icon">
            <p>Now you have everything you need, simply follow the instructions each day and enjoy a week of stress free cooking</p>
        </div>
    </div>
@endsection
