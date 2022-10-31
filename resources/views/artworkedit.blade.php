@extends('layouts.main')

@section('content')
    <div class="">
        <div class="grid grid-cols-2 mt-40">
            <div>
                @include('layouts.detailshow')
                <div class="ml-28">
                    <h1 class="text-red-500">Deleting is a permanent cannot be recovered.</h1>
                </div>
                <div class="flex justify-center space-x-5 m-5">
                    <button class="buyNowButton text-xl font-bold">
                        SAVE
                    </button>
                </div>
            </div>
            <div class="text-white font-bold text-md space-y-5">
                <div>
                    <h1>Artowork Name</h1>
                <textarea name="artwork_name" id="artwork_name" cols="30" rows="1" class="w-full"></textarea>
                </div>
                <div>
                    <h1>Price</h1>
                <textarea name="artwork_name" id="artwork_name" cols="30" rows="1" class="w-full"></textarea>
                </div>
                <div>
                    <h1>Description</h1>
                    <textarea name="artwork_name" id="artwork_name" cols="30" rows="5" class="w-full"></textarea>
                </div>
                
            </div>
        </div>
    </div>
@endsection