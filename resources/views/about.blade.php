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
    </style>

    <br>

    <!-- Strawberries Parallax -->
    <div class="bgimg-1 display-container" style="white-space:nowrap;">
        <svg height="120" width="auto" class="display-middle" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1988 250"><defs><style>.cls-1{fill:#fff;}</style></defs><title>Transparent logo</title><path class="cls-1" d="M970.62,85a53,53,0,0,0-17-11,57.53,57.53,0,0,0-42,0,53,53,0,0,0-17,11,49.89,49.89,0,0,0-11.44,17A57,57,0,0,0,879,124.13a57,57,0,0,0,4.15,22.08,49.79,49.79,0,0,0,11.44,17,52.9,52.9,0,0,0,17,11,57.66,57.66,0,0,0,42,0,52.9,52.9,0,0,0,17-11,50,50,0,0,0,11.45-17,57.14,57.14,0,0,0,4.15-22.08A57.23,57.23,0,0,0,982.07,102,50.06,50.06,0,0,0,970.62,85Z"/><path class="cls-1" d="M0,0V248.87H1988V0ZM210.64,202.79H180.58V125.23l1.8-26.37h-1.8l-40.83,70.53H121.58L80.52,98.86H78.73l1.79,26.37v77.56H50.68V45.46H80.52l49.13,83.28h1.8l49.13-83.28h30.06ZM344.81,73.59H273.24v36.47h64.39v28.13H273.24v36.48h71.57v28.12H243V45.46H344.81Zm157.71,129.2H470.66l-68.2-111.4h-1.79l1.79,30.32v81.08H372.62V45.46h35.22l64.62,105.47h1.79l-1.79-30.32V45.46h30.06ZM656.2,140.17a79.36,79.36,0,0,1-4.37,26.91A59.13,59.13,0,0,1,639.26,188a57,57,0,0,1-19.74,13.51,66.62,66.62,0,0,1-25.91,4.84,70.22,70.22,0,0,1-25.69-4.51,52.92,52.92,0,0,1-19.63-13.07A60.1,60.1,0,0,1,535.72,168a80.17,80.17,0,0,1-4.48-27.79V45.46h30.28v96.47a49.58,49.58,0,0,0,2,14.5,32.47,32.47,0,0,0,6.06,11.42,27.9,27.9,0,0,0,10.1,7.58,33.18,33.18,0,0,0,13.91,2.75,33.8,33.8,0,0,0,14.13-2.75,28,28,0,0,0,10.1-7.58,32.29,32.29,0,0,0,6-11.42,49.25,49.25,0,0,0,2-14.5V45.46H656.2Zm170.39,40.1a45.66,45.66,0,0,1-12.9,14.61A56.5,56.5,0,0,1,796,203.45a69.5,69.5,0,0,1-19.3,2.86,67.8,67.8,0,0,1-19.74-2.86,57.47,57.47,0,0,1-17.28-8.57A60.05,60.05,0,0,1,726,180.93a66.85,66.85,0,0,1-9.2-19.23l28.49-11a42.4,42.4,0,0,0,11,19.67q7.85,7.8,20.64,7.8A33.72,33.72,0,0,0,786,177a27.39,27.39,0,0,0,7.86-3.51,17.18,17.18,0,0,0,5.49-5.83,16,16,0,0,0,2-8.13,19.36,19.36,0,0,0-1.57-7.91,18.58,18.58,0,0,0-5.27-6.59,47,47,0,0,0-9.65-5.93,148.18,148.18,0,0,0-14.69-5.93l-9.88-3.52a76.08,76.08,0,0,1-13.12-5.93,57.63,57.63,0,0,1-12-9,44.21,44.21,0,0,1-8.86-12.42,36.21,36.21,0,0,1-3.48-16.15,40.65,40.65,0,0,1,3.7-17.25A42.33,42.33,0,0,1,737.07,54.8a49.87,49.87,0,0,1,16.38-9.45,69.25,69.25,0,0,1,42.18-.22,52.11,52.11,0,0,1,15,8.13,46,46,0,0,1,10,10.88,52.24,52.24,0,0,1,5.6,11.21l-26.69,11a27.87,27.87,0,0,0-8.19-11.86q-6-5.28-16.27-5.28-9.87,0-16.38,4.51t-6.5,11.75q0,7,6.28,12t20,9.56l10.09,3.29a117.92,117.92,0,0,1,17.61,7.58,55.24,55.24,0,0,1,13.69,10.22,41.55,41.55,0,0,1,8.75,13.52,46.76,46.76,0,0,1,3,17.46Q831.64,171.38,826.59,180.27Zm183.52-24a81,81,0,0,1-17.61,26.15,82,82,0,0,1-26.59,17.46,90.17,90.17,0,0,1-66.63,0,82,82,0,0,1-26.59-17.46,81.63,81.63,0,0,1-24-58.34,80.8,80.8,0,0,1,50.59-75.81,90.3,90.3,0,0,1,66.63,0A82,82,0,0,1,992.5,65.79a81.63,81.63,0,0,1,24,58.34A81.51,81.51,0,0,1,1010.11,156.32Zm129.11,46.47H1041V45.46h30.28V174.67h68Zm140.67-62.62a79.36,79.36,0,0,1-4.37,26.91A59.13,59.13,0,0,1,1263,188a57,57,0,0,1-19.74,13.51,66.62,66.62,0,0,1-25.91,4.84,70.22,70.22,0,0,1-25.69-4.51A52.92,52.92,0,0,1,1172,188.73,60.1,60.1,0,0,1,1159.41,168a80.17,80.17,0,0,1-4.48-27.79V45.46h30.28v96.47a49.58,49.58,0,0,0,2,14.5,32.47,32.47,0,0,0,6.06,11.42,27.9,27.9,0,0,0,10.1,7.58,33.18,33.18,0,0,0,13.91,2.75,33.8,33.8,0,0,0,14.13-2.75,28,28,0,0,0,10.1-7.58,32.29,32.29,0,0,0,6-11.42,49.25,49.25,0,0,0,2-14.5V45.46h30.29Zm138-66.58H1373v129.2h-30.28V73.59h-44.87V45.46h120Zm51.83,129.2H1439.4V45.46h30.29Zm183.63-46.47a81,81,0,0,1-17.61,26.15,82.08,82.08,0,0,1-26.59,17.46,90.17,90.17,0,0,1-66.63,0,82,82,0,0,1-26.59-17.46,81.63,81.63,0,0,1-24-58.34,80.8,80.8,0,0,1,50.59-75.81,90.3,90.3,0,0,1,66.63,0,82.1,82.1,0,0,1,26.59,17.47,81.63,81.63,0,0,1,24,58.34A81.51,81.51,0,0,1,1653.32,156.32Zm160.74,46.47h-31.85L1714,91.39h-1.79l1.79,30.32v81.08h-29.84V45.46h35.23L1784,150.93h1.8l-1.8-30.32V45.46h30.06Zm131.36-22.52a45.66,45.66,0,0,1-12.9,14.61,56.5,56.5,0,0,1-17.72,8.57,69.5,69.5,0,0,1-19.3,2.86,67.8,67.8,0,0,1-19.74-2.86,57.47,57.47,0,0,1-17.28-8.57,60.05,60.05,0,0,1-13.68-13.95,66.85,66.85,0,0,1-9.2-19.23l28.49-11a42.4,42.4,0,0,0,11,19.67q7.85,7.8,20.64,7.8a33.72,33.72,0,0,0,9.08-1.21,27.39,27.39,0,0,0,7.86-3.51,17.18,17.18,0,0,0,5.49-5.83,16,16,0,0,0,2-8.13,19.36,19.36,0,0,0-1.57-7.91,18.58,18.58,0,0,0-5.27-6.59,47,47,0,0,0-9.65-5.93,148.18,148.18,0,0,0-14.69-5.93l-9.88-3.52a76.42,76.42,0,0,1-13.12-5.93,57.63,57.63,0,0,1-12-9,44.21,44.21,0,0,1-8.86-12.42,36.21,36.21,0,0,1-3.48-16.15,40.65,40.65,0,0,1,3.7-17.25A42.33,42.33,0,0,1,1855.9,54.8a49.87,49.87,0,0,1,16.38-9.45,69.25,69.25,0,0,1,42.18-.22,52.11,52.11,0,0,1,15,8.13,46,46,0,0,1,10,10.88,51.78,51.78,0,0,1,5.6,11.21l-26.69,11a27.87,27.87,0,0,0-8.19-11.86q-6-5.28-16.27-5.28-9.87,0-16.38,4.51t-6.5,11.75q0,7,6.28,12t20,9.56l10.09,3.29a117.92,117.92,0,0,1,17.61,7.58,55.24,55.24,0,0,1,13.69,10.22,41.55,41.55,0,0,1,8.75,13.52,46.76,46.76,0,0,1,3,17.46Q1950.47,171.38,1945.42,180.27Z"/><path class="cls-1" d="M1613.83,85a53,53,0,0,0-17-11,57.53,57.53,0,0,0-42,0,53,53,0,0,0-17,11,49.89,49.89,0,0,0-11.44,17,57,57,0,0,0-4.16,22.09,57,57,0,0,0,4.16,22.08,49.79,49.79,0,0,0,11.44,17,52.9,52.9,0,0,0,17,11,57.66,57.66,0,0,0,42,0,52.9,52.9,0,0,0,17-11,49.79,49.79,0,0,0,11.44-17,57,57,0,0,0,4.16-22.08,57,57,0,0,0-4.16-22.09A49.89,49.89,0,0,0,1613.83,85Z"/></svg>
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
