<!-- Navigation for desktops -->
<div class="top">
    <ul class="navbar card-2 dark-grey left-align">

        <li class="hide-large hide-medium opennav right">
            <a class="padding-large" href="javascript:void(0)" onclick="show('smallNav')"
               title="Toggle Navigation Menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
        </li>

        @guest
            <li>
                <a href="{{ route('index') }}" class="padding-large hover-none hover-text-light-grey">HOME</a>
            </li>

            <li class="hide-small">
                <a href="{{ route('about') }}" class="padding-large">ABOUT</a>
            </li>
        @endguest

        @auth
            <li>
                <a href="{{ route('dashboard.index') }}" class="padding-large hover-none hover-text-light-grey">HOME</a>
            </li>

            <li class="hide-small">
                <a href="{{ route('dashboard.plan.index') }}" class="padding-large">PLAN</a>
            </li>

            <li class="hide-small">
                <a href="{{ route('dashboard.calendar.index') }}" class="padding-large">CALENDAR</a>
            </li>

            <li class="hide-small">
                <a href="{{ route('dashboard.list.index') }}" class="padding-large">LIST</a>
            </li>
        @endauth

        <div class="right">
            @guest
                <li class="right hide-small">
                    <a href="{{ route('register') }}" class="padding-large hover-theme">REGISTER</a>
                </li>
                <li class="right hide-small">
                    <a href="{{ route('login') }}" class="padding-large hover-theme">LOGIN</a>
                </li>
            @endguest

            @auth
                <li class="hide-small dropdown-hover">
                    <a href="javascript:void(0)" class="padding-large theme-d1" title="More">{{ Auth::user()->name }}
                        &nbsp <i class="fa fa-caret-down" aria-hidden="true"></i></a>

                    <div class="dropdown-content card-4">
                        <a href="{{ route('dashboard.profile.index' )}}" class="padding-large">PROFILE</a>
                        <a href="javascript:" class="padding-large disabled">SETTINGS</a>
                        @if (Auth::user()->is_admin)
                            <a href="{{ route('dashboard.admin.index') }}" class="padding-large hover-blue">ADMIN</a>
                        @endif
                    </div>
                </li>

                <li class="hide-small">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                       class="padding-large hover-red">LOGOUT</a>
                </li>
            @endauth
        </div>
    </ul>
</div>

<!-- Navigation Bar for small devices -->
<div id="smallNav" class="hide hide-large hide-medium top" style="margin-top:50px">
    <ul class="navbar left-align dark-grey">
        @guest
            <li><a href="{{ route('about') }}" class="padding-large">ABOUT</a></li>
            <li><a href="{{ route('login') }}" class="padding-large hover-theme">LOGIN</a></li>
            <li><a href="{{ route('register') }}" class="padding-large hover-theme">REGISTER</a></li>
        @endguest

        @auth
            <li><a href="{{ route('dashboard.plan.index') }}" class="padding-large">PLAN</a></li>
            <li><a href="{{ route('dashboard.calendar.index') }}" class="padding-large">CALENDAR</a></li>
            <li><a href="{{ route('dashboard.list.index') }}" class="padding-large">LIST</a></li>

            <li class="dropdown-click">
                <a onclick="show('dropdown')" class="padding-large theme-d1">{{ Auth::user()->name }} &nbsp
                    <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                <div id="dropdown" class="dropdown-content card">
                    <a href="{{ route('dashboard.profile.index' )}}" class="padding-large padding-left">PROFILE</a>
                </div>
            </li>

            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="padding-large red">LOGOUT</a>
            </li>
        @endauth
    </ul>
</div>

<form id="logout-form"
      action="{{ route('logout') }}"
      method="POST"
      style="display: none;">
    {{ csrf_field() }}
</form>

<script>
    function show(id) {
        let x = document.getElementById(id);
        if (x.className.indexOf("show") === -1) {
            x.className += " show";
        } else {
            x.className = x.className.replace(" show", "");
        }
    }
</script>