@extends('layouts.main')

@section('content')
    <div class="">
        <div class="grid grid-cols-2 mt-40 gridScreen">
            <div>
                @include('layouts.detailshow')
                <div class="ml-28 marginCommentLeft hiddenButton">
                    <h1 class="text-red-500">Deleting is a permanent cannot be recovered.</h1>
                </div>
                <div class="flex flex-row">
                    <div class="flex justify-center space-x-5 m-5 hiddenButton">
                        <button class="deleteButton text-xl font-bold">
                            DELETE
                        </button>
                    </div>
                    <div class="flex justify-center space-x-5 m-5 hiddenButton">
                        <button class="buyNowButton text-xl font-bold">
                            SAVE
                        </button>
                    </div>
                </div>

            </div>
            <form method="POST" action="">
                @csrf

                <div class="flex flex-col text-white font-bold text-md space-y-5 mr-6 ml-6">
                    <div>
                        <h1>Artwork Name</h1>
                        <textarea type="text" name="artwork_name" id="artwork_name" cols="30" rows="1" class="w-full " required autofocus ></textarea>
                    </div>
                    <div>
                        <h1>Price</h1>
                        <textarea type="number" name="artwork_name" id="artwork_name" cols="30" rows="1" class="w-full"></textarea>
                    </div>
                    <div>
                        <h1>Description</h1>
                        <textarea name="artwork_name" id="artwork_name" cols="30" rows="5" class="w-full"></textarea>
                    </div>
                </div>
                <div class="hidden ml-28 marginCommentLeft text-center showButton">
                    <h1 class="text-red-500">Deleting is a permanent cannot be recovered.</h1>
                </div>
                <div class="hidden flex justify-center space-x-5 m-5 mt-1 showButton">
                    <button class="deleteButton text-xl font-bold">
                        DELETE
                    </button>
                </div>
                <div class="hidden flex justify-center space-x-5 m-5 mt-1 showButton">
                    <button class="buyNowButton text-xl font-bold">
                        SAVE
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
