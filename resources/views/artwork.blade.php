@extends('layouts.main')

@section('content')

    <div class="mt-40">
        <div class="flex justify-center">
            <div class="linerectangle"></div>
        </div>
        <h1 class="text-white text-4xl uppercase font-bold text-center m-4">Artwork</h1>
        <div class="flex justify-center">
            <div class="linerectangle"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 items-center">
            @include('layouts.post')
            {{-- <div class="postimg">
                <img class="postImage" src="/images/Artwork-2.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Pancake
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 10.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-3.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Coffee
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 8.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-4.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Donut
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 5.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-1.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Sushi
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 7.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-2.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Pancake
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 10.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-3.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Coffee
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 8.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-4.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Donut
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 5.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-1.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Sushi
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 7.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-2.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Pancake
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 10.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-3.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Coffee
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 8.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-4.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Donut
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 5.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-1.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Sushi
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 7.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-2.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Pancake
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 10.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-3.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Coffee
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 8.00 AC</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artwork-4.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textpost font-bold">Product Name : Donut
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right mr-4 mt-4" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                </h1>
                <p class="ml-2 textpost text-sm">Price : 5.00 AC</p>
            </div> --}}
        </div>
    </div>

@endsection
