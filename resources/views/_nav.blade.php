<div class="sidebar" id="menu">
    <div class="sidebar_header border-b border-gray-200 from-gray-100 to-gray-50 bg-gradient-to-t  uk-visible@s">
        <a href="#">
            <img src="assets/images/logo.png">
            <img src="assets/images/logo-light.png" class="logo_inverse">
        </a>
        <!-- btn night mode -->
        <a href="#" id="night-mode" class="btn-night-mode" data-tippy-placement="left" title="Switch to dark mode"></a>
    </div>
    <div class="border-b border-gray-20 flex justify-between items-center p-3 pl-5 relative uk-hidden@s">
        <h3 class="text-xl"> Navigation </h3>
        <span class="btn-mobile" uk-toggle="target: #wrapper ; cls: sidebar-active"></span>
    </div>
    <div class="sidebar_inner" data-simplebar>
        <div class="flex flex-col items-center my-6 uk-visible@s">
            <div
                class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transition m-0.5 mr-2  w-24 h-24">
                <img src="assets/images/avatars/avatar-2.jpg"
                    class="bg-gray-200 border-4 border-white rounded-full w-full h-full">
            </div>
            <a href="profile.html" class="text-xl font-medium capitalize mt-4 uk-link-reset"> Stella Johnson
            </a>
            <div class="flex justify-around w-full items-center text-center uk-link-reset text-gray-800 mt-6">
                <div>
                    <a href="#">
                        <strong>Post</strong>
                        <div> 130</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <strong>Following</strong>
                        <div> 1,230</div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <strong>Followers</strong>
                        <div> 2,430</div>
                    </a>
                </div>
            </div>
        </div>
        <hr class="-mx-4 -mt-1 uk-visible@s">
        <ul>
            <li>
                <a href="{{url('/tweets')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    <span> Feed </span> </a>
            </li>
            <li>
                <a href="{{url('/explore')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <span> Find Friend </span> </a>
            </li>

            @auth
            <li>
                <a href="{{url('/notifications')}}">
                    <i class="uil-location-arrow"></i>
                    <span> Notification </span>  @if($count = Auth::user()->unreadNotifications->count())
                    <span class="nav-tag">
                            {{$count}}</span>   @endif
                        </a>
            </li>

            <li>
                <a href="{{url('/users')}}/{{Auth::user()->uname}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span> My Profile </span> </a>
            </li>
            <li>
                <hr class="my-2">
            </li>
            <li>
                <a href="{{url('/tweets')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                   <span> Post Today </span> </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="nav-link logout" type="submit">
                       <a> <i class="icon-feather-log-out"></i> Logout</a>
                    </button>
                </form>


            </li>

            @endauth

        </ul>
    </div>
    </div>
{{--
<nav id="menu" class="t-nav f fc ast ">

    <div class="nav-links f fc js mb1">
        <a class="nav-link" href="{{url('/tweets')}}">Home</a>
        <a class="nav-link" href="{{url('/explore')}}">Explore</a>
    <a class="nav-link" href="{{url('/notifications')}}">
        <span>Notifications</span>
        @if($count = Auth::user()->unreadNotifications->count())
            <span class="notifications-count">
                {{$count}}
            </span>
        @endif
    </a>

        <a class="nav-link" href="{{url('/users')}}/{{Auth::user()->uname}}">Profile</a>

        @auth

         <form class="f ac" method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="nav-link logout" type="submit">
                   Logout
                </button>
            </form>


    </div>
    <button id="tweetBtn"  class="btn btn-tweet nav-tweet" >Post Your Today thought</button>

    @endauth
</nav> --}}
