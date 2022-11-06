@extends('layouts.newmain')

@section('content')
    <div class="float-left mr-12">
        <div class="grid grid-cols-2 mt-40 gridScreen">
            <div class="mb-4 marginLeft">
                @include('layouts.detailshow')
            </div>
            <div class="space-y-5 ml-6 mb-8">
                @include('layouts.share')
                @include('layouts.detaildescription')

                <div>
                    <p class="text-white font-bold">Comment</p>
                    <textarea name="comments" id="comments" class="w-full"></textarea>
                </div>
                <button class="float-right postCommnetButton">
                    Post
                </button>
            </div>
        </div>
    </div>

    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      @include('layouts.popupgiftto')
    </div>
  
  </div>

<script>
        // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
    modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
    modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    }
</script>

@endsection
