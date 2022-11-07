@extends('layouts.user')

@section('content')
    <div>
        <div class="flex justify-center m-5">
            <div class="flex justify-center linerectangle"></div>
        </div>
        <h1 class="text-4xl font-semibold text-white text-center mb-5">My Wallet</h1>
        <div class="flex justify-center text-5xl font-bold text-white space-x-8">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFFFF" class="bi bi-x-diamond-fill" viewBox="0 0 16 16">
                <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.614L8 8.708l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.614-.706L7.292 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098l2.904 2.905z"/>
            </svg>
            <p>{{$currentUser['data']['wallet']['balance']}}</p>
            <p>AC</p>
        </div>
        <div class="flex justify-center m-5">
            <div class="flex justify-center smalllinerectangle"></div>
        </div>
        <div class="flex justify-center space-x-5 text-white text-xl">
            <p>{{$currentUser['data']['wallet']['point']}}</p>
            <p>Points</p>
        </div>
        <div class="space-y-5 mt-5 mb-8">
            <div class="flex justify-center">
                <button class="walletButton" onclick="document.location='wallet/transfer'">Transfer Money</button>
            </div>
            <div class="flex justify-center">
                <button class="walletButton" onclick="document.location='wallet/topup'">Top Up</button>
            </div>
        </div>
    </div>
@endsection
