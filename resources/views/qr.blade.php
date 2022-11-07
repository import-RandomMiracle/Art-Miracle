@extends('layouts.newmain')

@section('content')
    <div class="mt-40 space-y-10">
        <div class="flex justify-center">
            <img class="rounded" src="http://localhost:3000/storage/IMG_5715.jpg" alt="Miracle Work" height="" width="300" >
        </div>
        <div class="flex justify-center">
            <button id="myBtn" class="confirmButton">
                CONFIRM
            </button>
        </div>
    </div>

@endsection

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <h1 class="text-white font-bold text-xl">Payment Confirmation</h1>
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