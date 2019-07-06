<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.header')
<style>
    /* Create a Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3 {
        opacity: 0.9;
        background: no-repeat fixed center;
        background-size: cover;
    }

    /* Turn off parallax scrolling for tablets and mobiles */
    @media only screen and (max-width: 768px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
        }
    }
</style>

<body>
@include('layouts.navigation')

@yield('content')

@include('layouts.footer')
</body>
</html>