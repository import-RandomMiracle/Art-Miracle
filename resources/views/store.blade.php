@extends('layouts.main')

@section('content')
    <div class="float-left mr-12">
        <ul>
            <li>
                <img class="imageArtwork float-right mb-5" src="/images/Artwork-1.png" alt="Miracle Work" height="" width="350" >
            </li>
            <li>
                <h1 class="text-gray-300 text-xl font-light">Price</h1>
            </li>
            <li class="flex">
                <h1 class="text-white text-2xl font-semibold mb-3">5.00 AC</h1>
                <div class="float-right flex space-x-4">
                    <h1 class="text-white text-2xl font-semibold mb-3">10K</h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFFFF" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </div>
                
            </li>
            <li>
                <h1 class="text-gray-300 text-xl font-light">Reward</h1>
            </li>
            <li>
                <h1 class="text-white text-2xl font-semibold mb-3">30 POINT</h1>
            </li>
            <li class="flex justify-center space-x-5">
                <button class="buyNowButton text-xl font-bold">
                    BUY NOW
                </button>
                <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="#FFFFFF" class="bi bi-gift-fill" viewBox="0 0 16 16">
                    <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z"/>
                </svg>
            </li>
        </ul>
    </div>
    <ul class="flex mt-40 space-x-5">
        <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFFFF" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
        </li>
        <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFFFF" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>
        </li>
        <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFFFF" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
            </svg>
        </li>
        <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFFFF" class="bi bi-share-fill" viewBox="0 0 16 16">
                <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
            </svg>
        </li>
        <li class="float-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFCB44" class="bi bi-flag-fill" viewBox="0 0 16 16">
                <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
            </svg>
        </li>
    </ul>
    <div class="mt-5">
        <h1 class="text-4xl text-white uppercase font-bold">Computer</h1>
        <p class="text-white mt-5 font-bold">Creator</p>
        <ul class="flex">
            <li>
                <img class="rounded-full m-2" src="/images/Proflie.png" alt="ProfileUser" height="" width="60">
            </li>
            <li class="mt-3.5 ml-4">
                <h1 class="text-white font-semibold">USER NAME</h1>
                <p class="text-gray-400">@userid</p>
            </li>
        </ul>
        <p class="text-white mt-5 font-bold">Description</p>
        <div width="350">
            <p class="text-gray-400">Computer is the best friend with human. Sometimes it gives me a headache. but sometimes  it's cute 
            </p>
        </div>
        <p class="text-white mt-5 font-bold">Comment</p>
        <div>
            <textarea name="comments" id="comments" width="350">
            </textarea>
        </div>
        <button class="float-right postCommnetButton">
            Post
        </button>
    </div>
@endsection
