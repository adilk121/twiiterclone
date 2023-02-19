 {{-- <form class="t-form" class="" method="POST" action="{{url('/tweets')}}" enctype="multipart/form-data">
    @csrf
    <div class="group-body">
        <textarea id="tweetInput" name="tweet" id="" placeholder="What's on your mind ?"></textarea>
    </div>
    <div class="group-footer f ac jb">
        <img class="avatar" src={{Auth::user()->avatar}} alt="">

        <div class="f ac">
            <div class="files">
                <span class="hidden fa fa-trash fa-xs "></span>
                <span class="hidden files-count"></span>
                <input type="file" name="images[]" class="fa fa-images fa-files fa-lg" multiple/>
            </div>
            <button class="btn btn-tweet" type="submit">Post it !<button>
    </div>

    </div>
    @if ($errors->any())
        <div class="errors">
                @foreach ($errors->all() as $error)
                    <div class="error">{{ $error }}</div>
                @endforeach
        </div>
    @endif

</form>
 --}}
 <form class="t-form" class="" method="POST" action="{{ url('/tweets') }}" enctype="multipart/form-data">
     @csrf
     <div class="bg-white rounded-md lg:shadow-lg shadow col-span-2">

         <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">

             <div class="col-span-2">

                 <textarea name="tweet" id="" placeholder="What's on your mind ?" rows="3"
                     class="shadow-none bg-gray-100"></textarea>
             </div>

         </div>

         <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
             <div class="files">

                 <input type="file" name="images[]" class="fa fa-images fa-files fa-lg" multiple />
             </div>

             <button type="submit" class="button bg-blue-700"> Post it </button>
         </div>

         @if ($errors->any())
             <div class="errors">
                 @foreach ($errors->all() as $error)
                     <div class="error">{{ $error }}</div>
                 @endforeach
             </div>
         @endif

     </div>
 </form>
