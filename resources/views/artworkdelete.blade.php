@extends('layouts.main')

@section('content')
    <div class="float-left mr-12">
        <div class="grid grid-cols-2 mt-40 gridScreen">
            <div class="marginLeft">
                @include('layouts.detailshow')
                <div class="ml-28 marginRewardLeft hiddenButton">
                    <h1 class="text-red-500">Deleting is a permanent cannot be recovered.</h1>
                </div>
                <div class="flex justify-center space-x-5 m-5 hiddenButton">
                    <button class="buyNowButton text-xl font-bold">
                        DELETE
                    </button>
                </div>
            </div>
            <div class="space-y-5 marginLeft mt-6">
                @include('layouts.sharenoflag')
                @include('layouts.detaildescription')

                <div>
                    <div class="hidden ml-28 marginRewardLeft text-center showButton">
                        <h1 class="text-red-500">Deleting is a permanent cannot be recovered.</h1>
                    </div>
                    <div class="hidden flex justify-center space-x-5 m-5 showButton">
                        <button class="buyNowButton text-xl font-bold">
                            DELETE
                        </button>
                    </div>
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
