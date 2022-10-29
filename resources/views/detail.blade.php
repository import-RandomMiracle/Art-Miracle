@extends('layouts.main')

@section('content')
    <div class="float-left mr-12">
        @include('layouts.artworkdetail')
        <div class="grid grid-cols-2">
            <div>
                <h1 class="text-gray-300 text-xl font-light">Reward</h1>
                <h1 class="text-white text-2xl font-semibold mb-3">30 POINT</h1>
                <div class="flex space-x-5">
                    <button class="buyNowButton text-xl font-bold">
                        BUY NOW
                    </button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#FFFFFF" class="bi bi-gift-fill" viewBox="0 0 16 16">
                        <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
                    </svg>
                </div>
            </div>
            <div>
                <p class="text-white font-bold">Comment</p>
                <div>
                    <textarea name="comments" id="comments" class="w-full"></textarea>
                </div>
                <button class="float-right postCommnetButton">
                    Post
                </button>
            </div>
        </div>
    </div>
    
@endsection
