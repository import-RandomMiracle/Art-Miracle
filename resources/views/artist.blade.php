@extends('layouts.main')

@section('content')

    <div class="mt-40">
        <div class="flex justify-center">
            <div class="linerectangle"></div>
        </div>
        <h1 class="text-white text-4xl uppercase font-bold text-center m-4">Artist</h1>
        <div class="flex justify-center">
            <div class="linerectangle"></div>
        </div>

        <div class="grid grid-cols-4 items-center">
            @include('layouts.postartist')
            {{-- <div class="postimg">
                <img class="postImage" src="/images/Artist-1.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Ekko</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 15000 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-2.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Helen</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 12700 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-3.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Devie</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 23400 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-4.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Koi</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 9740 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-1.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Ekko</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 15000 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-2.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Helen</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 12700 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-3.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Devie</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 23400 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-4.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Koi</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 9740 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-1.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Ekko</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 15000 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-2.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Helen</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 12700 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-3.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Devie</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 23400 people</p>
            </div>
            <div class="postimg">
                <img class="postImage" src="/images/Artist-4.png" alt="Miracle Work" height="" width="300" >
                <h1 class="ml-2 textArtistPost font-bold">Artist Name : Koi</h1>
                <p class="ml-2 textArtistPost text-sm">Follower : 9740 people</p>
            </div> --}}
        </div>
    </div>

@endsection