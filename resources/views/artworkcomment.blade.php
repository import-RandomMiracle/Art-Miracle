@extends('layouts.main')

@section('content')
    <div class="mt-40">
        <div>
            @include('layouts.artworkshow')
        </div>
        <div class="space-y-2">
            <h1 class="text-amber-400 text-xl font-bold">Comment</h1>
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