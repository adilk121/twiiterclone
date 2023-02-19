<x-master>

    <div class="container wf hf">
            @if (session('status'))
            <div class="status">
                {{ session('status') }}
            </div>
             @endif


                <div id="wrapper" class="flex flex-col justify-between">

                    <!-- header-->


                    <!-- Content-->
                    <div>
                        <div class="lg:p-12 max-w-md max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
                            <h1 class="lg:text-3xl text-xl font-semibold  mb-6"> Log in</h1>
                            <p class="mb-2 text-black text-lg"> Email or Username</p>
                            <form action="#">
                                <input type="text" placeholder="example@mydomain.com" class="bg-gray-200 mb-2 shadow-none dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;">
                                <input type="text" placeholder="***********" class="bg-gray-200 mb-2 shadow-none dark:bg-gray-800" style="border: 1px solid #d3d5d8 !important;">
                                <div class="flex justify-between my-4">
                                    <div class="checkbox">
                                        <input type="checkbox" id="chekcbox1" checked>
                                        <label for="chekcbox1"><span class="checkbox-icon"></span>Remember Me</label>
                                    </div>
                                    <a href="#"> Forgot Your Password? </a>
                                </div>
                                <button type="submit" class="bg-gradient-to-br from-pink-500 py-3 rounded-md text-white text-xl to-red-400 w-full">Login</button>
                                <div class="text-center mt-5 space-x-2">
                                    <p class="text-base"> Not registered? <a href="register.php" class=""> Create a account </a></p>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Footer -->

        <form class="form sign-form c" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="group f ac jb">
                <label  >{{ __('Email') }}</label>
                <input class="control" type="email" name="email" value="{{ old('email') }}" required autofocus />
            </div>

            <div class="group f ac jb">
                <label  >{{ __('Password') }}</label>
                <input class="control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="group f ac js">
                <label  >{{ __('Remember me') }}</label>
                <input class="control" type="checkbox" name="remember">
            </div>

            @if (Route::has('password.request'))
                <div class="group f jc">
                    <a class="link c" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>

            @endif
            <div class="group f jc">
                <a class="link c" href="{{url('/register')}}">
                    New here ? Sign up
                </a>
            </div>
            <div class="group f jc">
                <button class="btn btn-auth" type="submit">
                {{ __('Login') }}
                </button>
            </div>

        </form>


        @if ($errors->any())
            <div class="errors card c">
                <div class="card-head">{{ __('Whoops! Something went wrong.') }}</div>

                <ul class="card-body ">
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

</x-master>
