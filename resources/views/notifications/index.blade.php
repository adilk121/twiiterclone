<x-app>



    <div class="notification f fc jc">

        <div class="unread">
            @foreach (Auth::user()->unreadNotifications->sortByDesc('created_at') as $notif)

            @if($notif->type == 'App\Notifications\FollowNotififcation')

            <form class="f jst ac" action="{{url('/notifications')}}/{{$notif->id}}" method="post">
                @csrf
                <button type="submit" class="f1">
                    <div class="notification-card unread  f ac js">


                        {{$notif->data['follower'] }}
                        Followed you
                        <small>
                            &nbsp;
                            {{$notif->created_at->diffForHumans()}}
                        </small>
                    </div>
                </button>
            </form>

            @endif

        @endforeach
        </div>


            <div class="read">
                @foreach (Auth::user()->readNotifications->sortByDesc('read_at'); as $notif)
                @if($notif->type == 'App\Notifications\FollowNotififcation')

                <div class="notification-card read f1 f ac js">


                    {{$notif->data['follower'] }}
                    Followed you
                    <small>
                        &nbsp;
                        {{$notif->created_at->diffForHumans()}}
                    </small>
                </div>

                @endif

            @endforeach
            </div>


        {{-- {{ $users->links() }} --}}
    </div>



</x-app>
