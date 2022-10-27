@extends('layouts.main')

@section('content')
    <ul class="flex justify-center mt-40">
        <li class="mt-5">
            <p class="text-2xl text-zinc-50 mb-4">we provide the best</p>
            <h1 class="text-5xl text-zinc-50 mb-4">Create,  Discover, Share, Sell</h1>
            <h1 class="text-5xl text-zinc-50 mb-4">Creative Artwork and</h1>
            <h1 class="text-5xl text-red-400">collect NFT</h1>
        </li>
        <li class="ml-20 slideshow-container">
            <img class="rounded-full" src="/images/Proflie.png" alt="Miracle Work" height="" width="300" >
        </li>
    </ul>

    <div class="flex justify-center m-20"> 
        <div class="rectangle">
            <ul class="flex justify-center mt-7">
                <li>
                    <button class="recButton pause mr-10 text-xl align-center text-white" onclick="document.location='/artwork'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#FFFFFF" class="bi bi-palette-fill svgButton" viewBox="0 0 16 16">
                            <path d="M12.433 10.07C14.133 10.585 16 11.15 16 8a8 8 0 1 0-8 8c1.996 0 1.826-1.504 1.649-3.08-.124-1.101-.252-2.237.351-2.92.465-.527 1.42-.237 2.433.07zM8 5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5 3a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 6.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                        </svg>
                        <p>Artwork</p>
                    </button>
                </li>
                <li>
                    <button class="recButton mr-10 text-xl text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#FFFFFF" class="bi bi-person-square svgButton" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                        </svg>
                        Artists
                    </button>
                </li>
                <li>
                    <button class="recButton mr-10 text-xl text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#FFFFFF" class="bi bi-postcard-fill svgButton" viewBox="0 0 16 16">
                            <path d="M11 8h2V6h-2v2Z"/>
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm8.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7ZM2 5.5a.5.5 0 0 0 .5.5H6a.5.5 0 0 0 0-1H2.5a.5.5 0 0 0-.5.5ZM2.5 7a.5.5 0 0 0 0 1H6a.5.5 0 0 0 0-1H2.5ZM2 9.5a.5.5 0 0 0 .5.5H6a.5.5 0 0 0 0-1H2.5a.5.5 0 0 0-.5.5Zm8-4v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5Z"/>
                        </svg>
                        Category
                    </button>
                </li>
                <li>
                    <button class="recButton mr-10 text-xl text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#FFFFFF" class="bi bi-tags-fill svgButton" viewBox="0 0 16 16">
                            <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                            <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043-7.457-7.457z"/>
                        </svg>
                        Tag
                    </button>
                </li>
                <li>
                    <button class="recButton mr-10 text-xl text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#FFFFFF" class="bi bi-archive-fill svgButton" viewBox="0 0 16 16">
                            <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                        </svg>
                        Gallery
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="align-center">
        <h1 class="text-2xl text-white text-center">FEATURED ARTISTS</h1>
        <a href="ArtistPage">
            <p class="text-sm text-amber-400 text-center">View All Artists</p>
        </a>
    </div>
    <div>
        <ul class="flex justify-center">
            <li>
                <div class="postimg">
                    <img class="postImage" src="/images/Artist-1.png" alt="Miracle Work" height="" width="300" >
                    <h1 class="ml-2 textArtistPost font-bold">Artist Name : Ekko</h1>
                    <p class="ml-2 textArtistPost text-sm">Follower : 15000 people</p>
                </div>
            </li>
            <li>
                <div class="postimg">
                    <img class="postImage" src="/images/Artist-2.png" alt="Miracle Work" height="" width="300" >
                    <h1 class="ml-2 textArtistPost font-bold">Artist Name : Helen</h1>
                    <p class="ml-2 textArtistPost text-sm">Follower : 12700 people</p>
                </div>
            </li>
            <li>
                <div class="postimg">
                    <img class="postImage" src="/images/Artist-3.png" alt="Miracle Work" height="" width="300" >
                    <h1 class="ml-2 textArtistPost font-bold">Artist Name : Devie</h1>
                    <p class="ml-2 textArtistPost text-sm">Follower : 23400 people</p>
                </div>
            </li>
            <li>
                <div class="postimg">
                    <img class="postImage" src="/images/Artist-4.png" alt="Miracle Work" height="" width="300" >
                    <h1 class="ml-2 textArtistPost font-bold">Artist Name : Koi</h1>
                    <p class="ml-2 textArtistPost text-sm">Follower : 9740 people</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="align-center mt-10">
        <h1 class="text-2xl text-white text-center">FEATURED ARTWORK</h1> 
        <a href="ArtworkPage">
            <p class="text-sm text-amber-400 text-center">View All Artwork</p>
        </a>
    </div>
    <div>
        <ul class="flex justify-center">
            <li>
                <div class="postimg">
                    <img class="postImage" src="/images/Artwork-1.png" alt="Miracle Work" height="" width="300" >
                    <h1 class="ml-2 textpost font-bold">Product Name : Sushi
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                    </h1>
                    <p class="ml-2 textpost text-sm">Price : 7.00 AC</p>
                </div>
            </li>
            <li>
                <div class="postimg">
                    <img class="postImage" src="/images/Artwork-2.png" alt="Miracle Work" height="" width="300" >
                    <h1 class="ml-2 textpost font-bold">Product Name : Pancake
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                    </h1>
                    <p class="ml-2 textpost text-sm">Price : 10.00 AC</p>
                </div>
            </li>
            <li>
                <div class="postimg">
                    <img class="postImage" src="/images/Artwork-3.png" alt="Miracle Work" height="" width="300" >
                    <h1 class="ml-2 textpost font-bold">Product Name : Coffee
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                    </h1>
                    <p class="ml-2 textpost text-sm">Price : 8.00 AC</p>
                </div>
            </li>
            <li>
                <div class="postimg">
                    <img class="postImage" src="/images/Artwork-4.png" alt="Miracle Work" height="" width="300" >
                    <h1 class="ml-2 textpost font-bold">Product Name : Donut
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                    </h1>
                    <p class="ml-2 textpost text-sm">Price : 5.00 AC</p>
                </div>
            </li>
        </ul>
    </div>
@endsection
