<aside class="t-friends f fc ast js">
    <h3>Following</h3>

        @forelse (auth()->user()->follows as $user)
        <a class="friend" href="{{$user->path()}}">
            <img class="avatar" src={{$user->avatar}} width="35px" alt="" srcset="">
            <div class="name">

                {{$user->name}}
            </div>
        </a>
        @empty
        <div class="friend">
            <h5>
                <a href="{{url('/explore')}}">Start following people</a>
            </h5>
        </div>


        @endforelse


</aside>
