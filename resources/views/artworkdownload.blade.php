@extends('layouts.main')

@section('content')
    <div class="float-left mr-12">
        <div class="grid grid-cols-2 mt-40 gridScreen">
            <div class="marginLeft">
                @include('layouts.detailshow')
                <div class="ml-28 marginRewardLeft hiddenButton">
                    <h1 class="text-red-500">This file type : .PNG</h1>
                </div>
                <div class="flex justify-center space-x-5 m-5 hiddenButton">
                    <button class="buyNowButton text-xl font-bold flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cloud-download-fill mt-5 mr-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                        </svg>
                        <p class="mt-3.5">Download</p>
                    </button>
                </div>
            </div>
            <div class="space-y-5 marginLeft mt-6">
                @include('layouts.sharenoflag')
                @include('layouts.detaildescription')

                <div class="hidden ml-28 marginRewardLeft text-center showButton">
                    <h1 class="text-red-500">This file type : .PNG</h1>
                </div>
                <div class="hidden flex justify-center space-x-5 m-5 showButton">
                    <button class="buyNowButton text-xl font-bold flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cloud-download-fill mt-5 mr-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                        </svg>
                        <p class="mt-3.5">Download</p>
                    </button>
                </div>

                <div class="space-y-2">
                    <p class="text-white font-bold">Comment</p>
                    <div class="border-2 rounded-md">
                        <p class="text-gray-300 m-1">comment</p>
                        <p class="text-gray-300 m-1">comment</p>
                        <p class="text-gray-300 m-1">comment</p>
                        <p class="text-gray-300 m-1">comment</p>
                        <p class="text-gray-300 m-1">comment</p>
                    </div>

                </div>
                <a href="" class="text-amber-400 float-right">
                    <p class="text-sm">View All Comment</p>
                </a>
            </div>
        </div>
    </div>
@endsection
