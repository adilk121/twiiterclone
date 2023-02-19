
            <div class="container m-auto">

                <h1 class="text-2xl leading-none text-gray-900 tracking-tight mt-3"> Account Setting </h1>
                <ul class="mt-5 -mr-3 flex-nowrap lg:overflow-hidden overflow-x-scroll uk-tab">
                    {{-- <li class="uk-active"><a href="#">General</a></li> --}}
                    <li class="uk-active"><a href="#">Profile</a></li>
                    {{-- <li><a href="#">Privacy</a></li>
                    <li><a href="#">Notification</a></li>
                    <li><a href="#">Social links</a></li>
                    <li><a href="#">Billing</a></li>
                    <li><a href="#">Security</a></li> --}}
                </ul>


                <form class="form tsm" method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="bg-white rounded-md lg:shadow-lg shadow col-span-2">
                        @if(session()->has('profile-update'))
                        <div class="group">
                        <div class="msg-success tc">
                                {{ session()->get('profile-update') }}
                            </div>
                        </div>
                    @endif
                       <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                           <div>
                               <label for=""> Username</label>
                               <input type="text" placeholder="Username.." name="uname" value="{{ old('uname') ?? auth()->user()->uname }}"  autofocus autocomplete="name"  class="shadow-none bg-gray-100">
                             <span class="text-danger">  @error('uname')<span>{{ $message }}</span>
                               @enderror
                            </div>
                           <div>
                               <label for=""> Name</label>
                               <input type="text" placeholder="Your name.." name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" class="shadow-none bg-gray-100">
                               <span class="text-danger">  @error('name')<span>{{ $message }}</span>  @enderror
                            </div>
                            <div class="col-span-2">
                                <label for=""> Email</label>
                                <input type="text" placeholder="Your email.."  name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus class="shadow-none bg-gray-100">
                                <span class="text-danger">  @error('email')<span>{{ $message }}</span>  @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="file">Avatar</label>
                                <input class="shadow-none bg-gray-100" type="file" name="avatar" />
                            </div>
                            <div class="col-span-2">
                                <label for=""> Current Password</label>
                                <input type="password" placeholder="Current Password" name="old_password" required autocomplete="odl_password" class="shadow-none bg-gray-100">
                               <span class="text-danger"> @error('old_password')<span>{{ $message }}</span>  @enderror
                            </div>
                            {{-- <div>
                               <label for=""> Working at</label>
                               <input type="text" placeholder="" class="shadow-none bg-gray-100">
                            </div>
                            <div>
                               <label for=""> Relationship </label>
                               <select id="relationship" name="relationship"  class="shadow-none bg-gray-100">
                                <option value="0">None</option>
                                <option value="1">Single</option>
                                <option value="2">In a relationship</option>
                                <option value="3">Married</option>
                                <option value="4">Engaged</option>
                              </select>
                            </div> --}}
                       </div>

                       <div class="bg-gray-10 p-6 pt-0 flex  space-x-3">
                           <button class="button bg-blue-700" type="submit">
                            {{ __('Update Profile') }}
                        </button>
                                </div>

                    </div>
                </form>
<hr>
                <form class="form tsm" method="POST" action="{{ route('user-password.update') }}">
                    @csrf
                    @method('PUT')
                    @if(session()->has('password-update'))
                    <div class="group">
                        <div class="msg-success tc">
                            {{ session()->get('password-update') }}
                        </div>
                    </div>
                    @endif
                    <div class="bg-white rounded-md lg:shadow-lg shadow col-span-2">

                           <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                               <div>
                                   <label for=""> Current Password</label>
                                   <input type="password" placeholder="Current Password.." name="current_password" required autocomplete="current-password"   class="shadow-none bg-gray-100">
                                   <span class="text-danger">   @error('current_password')<span>{{ $message }}</span>
                                   @enderror
                                </div>
                               <div>
                                   <label for=""> New Password</label>
                                   <input  placeholder="New Password.." type="password" name="password" required autocomplete="new-password" class="shadow-none bg-gray-100">
                                   @error('password')<span>{{ $message }}</span>  @enderror
                                </div>
                                <div class="col-span-2">
                                    <label for=""> Confirm Password</label>
                                    <input placeholder="Confirm Password.."  type="password" name="password_confirmation" required autocomplete="new-password" class="shadow-none bg-gray-100">
                                    <span class="text-danger">   @error('password_confirmation')<span>{{ $message }}</span>  @enderror
                                </div>

                                {{-- <div>
                                   <label for=""> Working at</label>
                                   <input type="text" placeholder="" class="shadow-none bg-gray-100">
                                </div>
                                <div>
                                   <label for=""> Relationship </label>
                                   <select id="relationship" name="relationship"  class="shadow-none bg-gray-100">
                                    <option value="0">None</option>
                                    <option value="1">Single</option>
                                    <option value="2">In a relationship</option>
                                    <option value="3">Married</option>
                                    <option value="4">Engaged</option>
                                  </select>
                                </div> --}}
                           </div>

                           <div class="bg-gray-10 p-6 pt-0 flex  space-x-3">
                               <button class="button bg-blue-700" type="submit">
                                {{ __('Save') }}
                            </button>
                                    </div>

                        </div>

                    </form>

                </div>

            </div>

{{--
<form class="form tsm" method="POST" action="{{ route('user-profile-information.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @if(session()->has('profile-update'))
    <div class="group">
        <div class="msg-success tc">
            {{ session()->get('profile-update') }}
        </div>
    </div>
    @endif

    <div class="group f ac jb">
        <label class="label f1">Username</label>
        <input class="f1" type="text" name="uname" value="{{ old('uname') ?? auth()->user()->uname }}" required autofocus autocomplete="name" />

    </div>
    @error('uname')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror

    <div class="group f ac jb">
        <label class="label f1">{{ __('Name') }}</label>
        <input class="f1" type="text" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus autocomplete="name" />
    </div>
    @error('name')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror

    <div class="group f ac jb">
        <label class="label f1">{{ __('Email') }}</label>
        <input class="f1" type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus />
    </div>
    @error('email')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror

    <div  class="group f ac jb">
        <label class="label f1">Avatar</label>
        <input class="f1" type="file" name="avatar" />
    </div>

    @error('avatar')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror

    <div  class="group f ac jb">
        <label class="label f1">{{ __('Current Password') }}</label>
        <input class="f1" type="password" name="old_password" required autocomplete="odl_password" />
    </div>
    @error('old_password')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div class="group f ac jb">
        <button class="btn btn-auth tsm" type="submit">
            {{ __('Update Profile') }}
        </button>


    </div>


</form>
 --}}
