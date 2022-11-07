<div class="grid grid-col-1">
    <div>
        <img class="imageArtwork mb-5" src="http://localhost:3000{{$artwork['data']['image']}}" alt="Miracle Work" height="" width="350" >
    </div>
    <div>
        <div class="grid grid-cols-2">
            <div>
                <h1 class="text-gray-300 text-xl font-light">Price</h1>
                <h1 class="text-white text-2xl font-semibold mb-3">{{$artwork['data']['price']}} AC</h1>
            </div>   
            <div class="float-right flex space-x-4 m-2.5">
                <h1 class="text-white text-2xl font-semibold mb-3">{{$artwork['data']['likes']}}</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFFFF" class="bi bi-heart" viewBox="0 0 16 16">
                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>                    </svg>
            </div>
            <div class="marginRewardLeft">
                <h1 class="text-gray-300 text-xl font-light">Reward</h1>
                <h1 class="text-white text-2xl font-semibold mb-3">{{$artwork['data']['point']}} Point</h1>
            </div> 
        </div> 
    </div>
    <div>
        <form method="post" action="{{ redirect()->route('buy.artwork',['artwork' => $artwork['data']['id']]) }}">
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
</div>