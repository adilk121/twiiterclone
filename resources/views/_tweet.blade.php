<div class="space-y-5 flex-shrink-0 lg:w-7/12">


    <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                <!-- post header-->
                <div class="flex justify-between items-center px-4 py-3">
                    <div class="flex flex-1 items-center space-x-4">
                        <a href="#">
                            <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">
                                <img src="{{$tweet->user->avatar}}" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                            </div>
                        </a>
                        <span class="block capitalize font-semibold dark:text-gray-100">
                            <a href="{{url('/users')}}/{{$tweet->user->uname}}">
                                {{$tweet->user->name}}

                            </a>

                         </span>
                    </div>
                  <div>
                    <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                               <i class="uil-trash-alt mr-1"></i>  Delete
                              </a>
                  </div>
                </div>
                <div class="py-3 px-4 space-y-3 flex space-x-4 lg:font-bold">
                    {{$tweet->body}}
                </div>
                <div uk-lightbox>
                    @if ($images = $tweet->image)
                    <div class="t-images f fw">
                        @if (count($images)>1)
                        <i id="slide-backward" class="fa fa-arrow-left slide-backward ">  </i>
                        <i id="slide-forward" class="fa fa-arrow-right slide-forward"></i>

                        @endif
                        @foreach ($images as $image)
                            <span class="image  f ac jc">
                                <a href="assets/images/post/img4.jpg"> <img class="img" src="{{$image}}" alt=""> </a>
                            </span>
                        @endforeach

                    </div>
                @endif



                </div>


                <div class="py-3 px-4 space-y-3">

                    <div class="flex space-x-4 lg:font-bold ">
                        <form action="{{url('/tweets')}}/{{$tweet->id}}/like" method="post">
                            @csrf
                        <span  class="flex items-center space-x-2">
                            <div class="p-2 rounded-full text-black">

                            <button type="submit" class={{$tweet->liked(Auth::user()) ? 'like' : ''}}>  <i class="uil-thumbs-up"></i> <span>{{$tweet->likesCount() ?: ''}}</button></div>
                        </span>
                    </form>
                    <form action="{{url('/tweets')}}/{{$tweet->id}}/dislike" method="post">
                        @csrf
                      <span class="flex items-center space-x-2">
                        <div class="p-2 rounded-full text-black">
                            <button type="submit" class={{$tweet->liked(Auth::user(),false) ? 'dislike' :''}}>  <i class="uil-thumbs-down"></i>  <span>{{$tweet->likesCount(false) ?: ''}} </span>
                            </div>

                        </span>
                    </form>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="flex items-center">
                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                            <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                            <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                        </div>
                        <div class="dark:text-gray-100">
                            Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                        </div>
                    </div>


                </div>
    </div>
<hr style="border:solid 1px red">
