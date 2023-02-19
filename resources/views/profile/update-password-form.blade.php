{{--

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
                   <input placeholder="Your name.." name="current_password" required autocomplete="current-password"   class="shadow-none bg-gray-100">
                   @error('current_password')<span>{{ $message }}</span>
                   @enderror
                </div>
               <div>
                   <label for=""> New Password</label>
                   <input  placeholder="Your name.." type="password" name="password" required autocomplete="new-password" class="shadow-none bg-gray-100">
                   @error('password')<span>{{ $message }}</span>  @enderror
                </div>
                <div class="col-span-2">
                    <label for=""> Confirm Password</label>
                    <input placeholder="Your name.."  type="password" name="password_confirmation" required autocomplete="new-password" class="shadow-none bg-gray-100">
                    @error('password_confirmation')<span>{{ $message }}</span>  @enderror
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
 --}}



{{-- <form class="form tsm" method="POST" action="{{ route('user-password.update') }}">
    @csrf
    @method('PUT')
    @if(session()->has('password-update'))
    <div class="group">
        <div class="msg-success tc">
            {{ session()->get('password-update') }}
        </div>
    </div>
    @endif
    <div  class="group f ac jb">
        <label class="label f1">{{ __('Current Password') }}</label>
        <input class="f1" type="password" name="current_password" required autocomplete="current-password" />
    </div>
    @error('current_password')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div class="group f ac jb">
        <label class="label f1">{{ __('Password') }}</label>
        <input class="f1" type="password" name="password" required autocomplete="new-password" />
    </div>
    @error('password')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div class="group f ac jb">
        <label class="label f1">{{ __('Confirm Password') }}</label>
        <input class="f1" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>
    @error('password_confirmation')
    <div class="group f ac jc">
        <div class="error tc">{{ $message }}</div>

    </div>
    @enderror
    <div class="group f ac jb">
        <button class="btn btn-auth tsm" type="submit">
            {{ __('Save') }}
        </button>


    </div>


</form> --}}

