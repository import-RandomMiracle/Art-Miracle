@extends('layouts.main')

@section('content')
    <div class="float-left">
        <div class="grid grid-cols-2 mt-40 gridScreen">
            <div class="grid grid-rows-1">
                @include('layouts.detailshow')
                <div class="space-y-5 hiddenButton">
                    <p class="text-center text-red-500">Deleting is a permanent and cannot be recovered.</p>
                    <div class="flex justify-center">
                        <button class="buyNowButton text-xl font-bold">
                            DELETE
                        </button>
                    </div>
                </div>
            </div>
            <div class="space-y-5 ml-6 mr-6 mb-4">
                @include('layouts.detaildescription')
                <div>
                    <p class="text-white font-semibold">Report Description</p>
                    <textarea name="comments" id="comments" class="w-full"></textarea>
                </div>
                <div class="hidden space-y-5 showButton">
                    <p class="text-center text-red-500">Deleting is a permanent and cannot be recovered.</p>
                    <div class="flex justify-center">
                        <button class="buyNowButton text-xl font-bold">
                            DELETE
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
