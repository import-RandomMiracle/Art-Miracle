@extends('layouts.main')

@section('content')

    <div>
        <ul class="flex justify-center mt-40 space-x-7">
            <li>
                <img class="rounded-full" src="/images/Profile-2.png" alt="UserProfile" height="" width="200" >
            </li>
            <li>
                <div class="space-y-5">
                    <div class="flex space-x-10">
                        <h1 class="text-white text-xl font-bold">Miracle Artist</h1>
                        <button class="editProfileButton text-white text-sm">Edit Profile</button>
                        <a href="wallet">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" class="bi bi-wallet2" viewBox="0 0 16 16">
                                <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                            </svg>
                        </a>
                        <a href="reportArtist">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFCB44" class="bi bi-flag-fill" viewBox="0 0 16 16">
                                <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                            </svg>
                        </a>
                    </div>
                    <ul class="space-y-5">
                        <li class="flex justify-center space-x-20 text-white">
                            <p>post</p>
                            <p>followers</p>
                            <p>following</p>
                        </li>
                        <li>
                            <p class="text-gray-300">Hello my name is miracle you can see my artwork on profile now</p>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <div class="flex justify-center m-5">
            <div class="flex justify-center linerectangle"></div>
        </div>
        <div class="flex justify-center space-x-10">
            <button class="postButton">IMAGE</button>
            <button class="postButton">MODEL</button>
            <button class="postButton">GALLERY</button>
        </div>
        <div class="mr-30 ml-30">
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
            </ul>
        </div>
    </div>
@endsection
