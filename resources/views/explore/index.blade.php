<x-app>


    <div class="container m-auto">

        <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mb-5"> Follow </h1>

        <div class="lg:flex justify-center lg:space-x-10 lg:space-y-0 space-y-5">

            <!-- left sidebar-->
            <div class="space-y-5 flex-shrink-0 lg:w-7/12">


                <div class="bg-white dark:bg-gray-900 shadow-md rounded-md overflow-hidden">

                    <div class="bg-gray-50 dark:bg-gray-800 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:border-gray-800">
                        <h2 class="font-semibold text-lg">Who to follow</h2>
                        <a href="#"> Refresh</a>
                    </div>

                    <div class="divide-gray-300 divide-gray-50 divide-opacity-50 divide-y px-4 dark:divide-gray-800 dark:text-gray-100">

                        @foreach ($users as $user)

                        <div class="flex items-center justify-between py-3">
                            <div class="flex flex-1 items-center space-x-4">
                                <a href="profile.html">
                                    <img src={{$user->avatar}} class="bg-gray-200 rounded-full w-10 h-10">
                                </a>
                                <div class="flex flex-col">
                                    <span class="block capitalize font-semibold"> <a href="/users/{{$user->uname}}">
                                        {{$user->name}}

                                    </a> </span>
                                    <span class="block capitalize text-sm">   <small>{{'@'.$user->uname}}</small> </span>
                                </div>
                            </div>

                            <form action="{{$user->path('follow')}}" method="post">
                                @csrf
                                <button type="submit"
                                        class="border border-gray-200 font-semibold px-4 py-1 rounded-full hover:bg-pink-600 hover:text-white hover:border-pink-600 dark:border-gray-800 btn user-btn {{Auth::user()->following($user) ? 'btn-tweet-red' : 'btn-tweet'}} ">
                                        {{Auth::user()->following($user) ? 'Unfollow' : 'Follow'}}
                                </button>
                            </form>
                        </div>
                        @endforeach

                        {{ $users->links() }}





                    </div>

                </div>
            </div>
            </div>

            </div>
        </div>


    </div>

{{--
    <div class="explore f fc jc">
        @foreach ($users as $user)
            <div class="user-card f1 f ac jb">
                    <div class="f ac js">

                        <img class="t-avatar avatar" src={{$user->avatar}} alt="">

                            <a href="/users/{{$user->uname}}">
                                {{$user->name}}
                                <small>{{'@'.$user->uname}}</small>
                            </a>

                    </div>

                        <form action="{{$user->path('follow')}}" method="post">
                            @csrf
                            <button type="submit"
                                    class="btn user-btn {{Auth::user()->following($user) ? 'btn-tweet-red' : 'btn-tweet'}} ">
                                    {{Auth::user()->following($user) ? 'Unfollow' : 'Follow'}}
                            </button>
                        </form>

            </div>
        @endforeach

            {{ $users->links() }}
    </div> --}}

</x-app>
