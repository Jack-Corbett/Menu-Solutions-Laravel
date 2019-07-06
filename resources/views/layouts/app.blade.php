<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.header')
<body>
<div class="page-wrap">
    @include('layouts.navigation')
    <br><br>
    @yield('content')
</div>
@include('layouts.footer')
</body>
</html>
