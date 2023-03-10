//header included here
<header>
    <div class="header_inner">
        <div class="left-side">
            <!-- Logo -->
            <div id="logo" class=" uk-hidden@s">
                <a href="explore.php">
                    <img src="assets/images/logo-mobile.png" alt="">
                    <img src="assets/images/logo-mobile-light.png" class="logo_inverse">
                </a>
            </div>

            <div class="triger" uk-toggle="target: #wrapper ; cls: sidebar-active">
                <i class="uil-bars"></i>
            </div>

            <div class="header_search">
                <input type="text" placeholder="Search..">
                <div class="icon-search">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
            </div>

        </div>
        <div class="right-side lg:pr-4">

             <!-- Notification -->

            <a href="#" class="header-links-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </a>
            <div uk-drop="mode: click;offset: 4" class="header_dropdown">
                <h4
                    class="-mt-5 -mx-5 bg-gradient-to-t from-gray-100 to-gray-50 border-b font-bold px-6 py-3">
                    Notification </h4>
                <ul class="dropdown_scrollbar" data-simplebar>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <p> <strong>Adrian Mohani</strong>  Lorem ipsum dolor cursus
                                    <span class="text-link"> Adipiscing massa convallis  </span>
                                </p>
                                <span class="time-ago"> 2 hours ago </span>
                            </div>
                        </a>
                    </li>

                </ul>
                <a href="#" class="see-all">See all</a>
            </div>

            <!-- Messages -->

            <a href="#" class="header-links-item">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
            </a>
            <div uk-drop="mode: click;offset: 4" class="header_dropdown">
                <h4
                    class="-mt-5 -mx-5 bg-gradient-to-t from-gray-100 to-gray-50 border-b font-bold px-6 py-3">
                    Messages </h4>
                <ul class="dropdown_scrollbar" data-simplebar>
                    <li>
                        <a href="#">
                            <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                            </div>
                            <div class="drop_content">
                                <strong> John menathon </strong> <time> 6:43 PM</time>
                                <p> Lorem ipsum dolor sit amet, consectetur </p>
                            </div>
                        </a>
                    </li>

                </ul>
                <a href="#" class="see-all">See all</a>
            </div>

            <!-- profile -->

            <a href="#">
                <img src="assets/images/avatars/avatar-2.jpg" class="header-avatar" alt="">
            </a>
            <div uk-drop="mode: click;offset:9" class="header_dropdown profile_dropdown border-t">
                <ul>
                    <li><a href="form-login.html"> Log Out</a></li>
                </ul>
            </div>

        </div>
    </div>
</header>
{{--
<header class="t-header f js ac">
    <a class="f"  href="{{url('/tweets')}}">
        <img width="" src="{{asset('assets/logo.png')}}" alt="" srcset="">
        <div class="t-brand"></div>

    </a>
    @auth

    <div class="menu" id="menu-toggler">Menu</div>

        @endauth
</header> --}}
