<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Menu Solutions is an automated meal planning app for students, couples and busy families.
    Our algorithm chooses recipes each week, taking into account how long you have to cook and who will be eating each day.">
    <meta name="keywords" content="meal, meals, planner, recipes, menu, solutions, family, plan, student, students">
    <meta name="author" content="Jack Corbett">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, width=device-width">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Menu Solutions</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;
            color: #777;
        }
        body, html {
            height: 100%;
            line-height: 1.8;
        }
        @yield('style')
    </style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Icon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
</head>