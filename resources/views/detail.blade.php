@extends('layouts.main')

@section('content')
    <div class="float-left mr-12">
        <div class="grid grid-cols-2 mt-40 gridScreen">
            <div class="mb-4 marginLeft">
                @include('layouts.detailshow')
                <div class="ml-28 marginRewardLeft">
                    <h1 class="text-gray-300 text-xl font-light">Reward</h1>
                    <h1 class="text-white text-2xl font-semibold mb-3">{{$artwork['data']['point']}} POINT</h1>
                </div>
                <form method="post" action="{{ route('image.store',['artwork' => $artwork['data']['id']]) }}">
                    @csrf
                    <div class="flex justify-center space-x-5">
                        <button type="submit" class="buyNowButton text-xl font-bold">
                            BUY NOW
                        </button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#FFFFFF"
                             class="bi bi-gift-fill" viewBox="0 0 16 16">
                            <path
                                d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
                        </svg>
                    </div>
                </form>
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
        btn.onclick = function () {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

@endsection
