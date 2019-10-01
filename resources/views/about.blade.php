@extends ('layouts.image')

@section('content')
    <style>
        /* Raspberries */
        .bgimg-1 {
            background-image: url({{ asset('img/backgrounds/raspberries.jpeg') }});
            min-height: 400px;
        }

        /* Blueberries */
        .bgimg-2 {
            background-image: url({{ asset('img/backgrounds/blueberries.jpeg') }});
            min-height: 350px;
        }

        /* Strawberries */
        .bgimg-3 {
            background-image: url({{ asset('img/backgrounds/strawberries.jpeg') }});
            min-height: 350px;
        }
        @media screen and (min-width: 500px) {
            .svg {
                width:70%;
            }
        }
    </style>

    <br>

    <!-- Strawberries Parallax -->
    <div class="bgimg-1 display-container" style="white-space:nowrap;">
        <img src="{{ asset('img/scale-logo.svg') }}" class="display-middle svg" alt="White transparent Menu Solutions Logo">
    </div>

    <!-- How it Works -->
    <div class="dark-grey">
    <div class="container content padding-32">
        <div class="row-padding">
            <div class="col l4 m4 s5"><img src="{{ asset('img/logo-black.png') }}" class="image circle" style="width:85%"></div>
            <div class="col l8 m8 s7">
                <h3 class="text-white">How it Works</h3>
                <p>Menu Solutions is an automated meal planning app for students, couples and busy families. Our algorithm chooses recipes each week, taking into account how long you have to cook and who will be eating each day. By adding family members/house mates to your group, Menu Solutions can ensure meal plans fit around your busy schedules, bringing everyone together for meal times. All the ingredients you need are then compiled into a shopping list to make it easy to pick up from the supermarket and enjoy a week of stress free cooking.</p>
            </div>
        </div>
        <div class="center">
            <a href="{{ route('register') }}" class="btn animate-opacity hover-white theme-d1 round">REGISTER NOW</a>
        </div>
    </div>
    </div>

    <!-- Blueberries Parallax -->
    <div class="bgimg-2 display-container">
        <span class="display-middle xlarge wide white padding-large text-dark-grey">SUPPORT US</span>
    </div>

    <!-- Community -->
    <div class="dark-grey">
        <div class="container content padding-32">
            <div class="row-padding">
                <div class="col l4 m4 s6"><img src="{{ asset('img/group.png') }}" class="image" style="width:85%"></div>
                <div class="col l8 m8 s6">
                    <h3 class="text-white">Community</h3>
                    <p>There are many ways you can support the development of Menu Solutions. First of all, like our Facebook page to keep up to date with all the latest news as the platform grows. If you'd like to get involved we are always looking for help, especially with widening the range of recipes available. If you have recipe ideas you would like to share please contact us through the page as we are eager to cater to a range of allergies and support vegetarian and vegan diets in the future.</p>
                </div>
            </div>
            <div class="center">
                <a href="https://www.facebook.com/MenuSolutionsApp" class="btn animate-opacity hover-white indigo round"><i class="fab fa-facebook large margin-right"></i> LIKE OUR PAGE</a>
            </div>
        </div>
    </div>

    <!-- Strawberries Parallax -->
    <div class="bgimg-3 display-container">
        <span class="display-middle xlarge wide white padding-large text-dark-grey">ABOUT US</span>
    </div>

    <!-- About Us -->
    <div class="dark-grey padding-32">
        <div class="container content padding-bottom">
            <div class="row-padding">
                <div class="col l4 m4 s6"><img src="{{ asset('img/about/profile.jpg') }}" class="circle center" style="width:85%"></div>
                <div class="col l8 m8 s6">
                    <h3 class="text-white">Jack Corbett</h3>
                    <p>I first came up with the idea for Menu Solutions when deciding on an A-Level project and since then it has gone through many iterations to reach the site you see today. I am a Computer Science student at the University of Southampton and am part of the Future Worlds business accelerator on campus. Future Worlds have helped me to secure funding and provided advice and support that has shaped the development of Menu Solutions. <br> If you'd like to find out more about me, check out my LinkedIn and Github below.</p>
                </div>
            </div>
            <div class="center">
                <a href="https://www.linkedin.com/in/jack-corbett" class="btn animate-opacity hover-white blue round"><i class="fab fa-linkedin large margin-right"></i> LINKEDIN</a>
                <a href="https://github.com/Jack-Corbett" class="btn animate-opacity hover-white black round"><i class="fab fa-github large margin-right"></i> GITHUB</a>
            </div>
        </div>
        <div class="container content row">
            <hr>
            <div class="half container">
                <h4 class="text-white center">Ellis Muddle</h4>
                <p>Ellis designed most of the logos and icons you see across the site. To see her portfolio and get in contact check out her Instagram below.</p>
                <div class="center">
                    <a href="https://www.instagram.com/ellis_muddle/" class="btn animate-opacity hover-white purple round"><i class="fab fa-instagram large margin-right"></i> INSTAGRAM</a>
                </div>
            </div>
            <div class="half container">
                <h4 class="text-white center">Nathan Pride</h4>
                <p>Nathan helped with the overall design and created the rest of the icons. To see more of his work check out his Github below.</p>
                <div class="center">
                    <a href="https://github.com/nathanp99" class="btn animate-opacity hover-white black round"><i class="fab fa-github large margin-right"></i> GITHUB</a>
                </div>
            </div>
        </div>
    </div>
@endsection
