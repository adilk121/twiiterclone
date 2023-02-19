<x-master>


   <div class="container wf hf">


        <form class="form sign-form c" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="group f jb ac">
                <label>{{ __('Name') }}</label>
                <input type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"  />
            </div>
            <div class="group f jb ac">
                <label>{{ __('User Name') }}</label>
                <input type="text" name="uname" value="{{ old('uname') }}" required autofocus autocomplete="uname" />
            </div>
            <div class="group f jb ac">
                <label>{{ __('Email') }}</label>
                <input type="email" name="email" value="{{ old('email') }}" required />
            </div>

            <div class="group f jb ac">
                <label>{{ __('Password') }}</label>
                <input type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="group f jb ac">
                <label>{{ __('Confirm Password') }}</label>
                <input type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="group f jc mt2">
                    <a class="link " href="{{ route('login') }}">
                        {{ __('Already registered? Sign In') }}
                    </a>
            </div>

            <div class="group f jc">
                <button class="btn btn-auth" type="submit">
                    {{ __('Register') }}
                </button>
            </div>
        </form>

        @if ($errors->any())
            <div class="errors c card">
                <div class="card-head ">{{ __('Whoops! Something went wrong.') }}</div>

                <ul class="card-body  ">
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
   </div>
</x-master>
