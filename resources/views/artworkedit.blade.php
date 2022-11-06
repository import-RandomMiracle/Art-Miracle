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
                    <div class="flex justify-center m-5 space-x-5 hiddenButton">
                        <button class="text-xl font-bold deleteButton">
                            DELETE
                        </button>
                    </div>
                    <div class="flex justify-center m-5 space-x-5 hiddenButton">
                        <button class="text-xl font-bold buyNowButton">
                            SAVE
                        </button>
                    </div>
                </div>

            </div>
            <form method="POST" action="{{ route('edit.artwork', [  'price' => $artwork->price, 'description' => $artwork->description, 'category' => $artwork->categories  ]) }}">
                @csrf

                <div class="flex flex-col ml-6 mr-6 space-y-5 font-bold text-white text-md">
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
                <div class="hidden text-center ml-28 marginCommentLeft showButton">
                    <h1 class="text-red-500">Deleting is a permanent cannot be recovered.</h1>
                </div>
                <div class="flex justify-center hidden m-5 mt-1 space-x-5 showButton">
                    <button name="delete" type="submit" class="text-xl font-bold deleteButton">
                        DELETE
                    </button>
                </div>
                <div class="flex justify-center hidden m-5 mt-1 space-x-5 showButton">
                    <button name="save" type="submit" class="text-xl font-bold buyNowButton">
                        SAVE
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
