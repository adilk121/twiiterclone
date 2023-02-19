

    <x-master>

            <div class="main_content">

                @include('_header')
                <section class="t-feed f fc ac ">

                    {{ $slot }}
                </section>
                    {{-- @include('_friends') --}}

            </div>


</x-master>

