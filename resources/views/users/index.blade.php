

<x-app>
    @include('_cover')
    @auth
        @if(Auth::user()->id == $user->id)

            @include('_t-form')

        @endif
    @endauth
    @include('_feed')

</x-app>


<div class="bg-white rounded-md lg:shadow-lg shadow col-span-2">

    <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
