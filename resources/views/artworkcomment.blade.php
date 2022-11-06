@extends('layouts.main')

@section('content')
    <div class="flex mt-40 wrapScreen ">
        <div class="marginLeft">
            @include('layouts.artworkshow')
        </div>
        <div class="w-full space-y-2 marginCommentLeft">
            <h1 class="text-amber-400 text-xl font-bold">Comment</h1>
            @include('layouts.comment')
            @include('layouts.comment')
            @include('layouts.comment')
            @include('layouts.comment')
            @include('layouts.comment')
            @include('layouts.comment')
            @include('layouts.comment')
            @include('layouts.comment')
            @include('layouts.comment')
            @include('layouts.comment')
            @include('layouts.comment')
            @include('layouts.comment')
        </div>
    </div>
@endsection
