@extends('layouts.main')

@section('content')
        <div class="mt-48">
            <form method="POST" action="" class="justify-end">
                @csrf

                <div class="flex flex-row justify-center">
                    <div class="">
                        <ul>
                            <li class="ml-20">
                                <img class="imageArtwork" src="/images/Proflie.png" alt="Miracle Art Work" height="" width="350" >
                            </li>
                        </ul>
                    </div>

                    <div class="ml-10 basis-1/2">
                        <div class="mt-4">
                            <label class="text-white">Artwork Name</label>
                            <label>
                                <input class="block mt-1 w-full rounded-lg" type="text" name="name" required autofocus />
                            </label>
                        </div>

                        <div class="mt-4">
                            <label class="text-white">Price</label>
                            <label>
                                <input class="block mt-1 w-full rounded-lg" type="number" name="price" required/>
                            </label>
                        </div>

                        <div class="mt-4">
                            <label class="text-white">Description</label>
                            <label>
                                <textarea rows="4" type="text" name="description" class="block mt-1 w-full rounded-lg" required></textarea>
                            </label>
                        </div>

                    </div>

                </div>

                <div class="flex items-center justify-center mt-10">
                    <button class="ml-3 bg-yellow-500 rounded-lg p-2 w-1/5 font-bold">
                        POST
                    </button>
                </div>
            </form>
        </div>


@endsection
