@extends('layouts.main')

@section('content')
    <div class="mt-40">
        <h1 class="text-center text-white text-2xl font-bold">Enter K-Bank Account Number</h1><br>
        <div class="flex justify-center mb-10">
            <textarea name="accountNumber" id="accountNumber" class="w-9/12 content-center"></textarea>
        </div>
        <h1 class="text-center text-white text-2xl font-bold">Enter Money Transfer</h1><br>
        <div class="flex justify-center mb-10">
            <textarea name="accountNumber" id="accountNumber" class="w-9/12 content-center"></textarea>
        </div>
    </div>
    <div class="flex justify-center">

        <button class="walletButton walletButtonResponsive flex justify-center space-x-3" onclick="document.location='wallet/transfer'">

        <button id="myBtn" class="walletButton flex justify-center space-x-3" onclick="document.location='wallet/transfer'">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cash-coin mt-1.5" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
              </svg>
              <p class="mt-1.5">Transfer Money</p>
            </button>
    </div>
@endsection

    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      @include('layouts.confirmtransfer')
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

