@extends('layouts.main')

@section('content')
    <div class="flex justify-center mt-40">
        <div class="linerectangle"></div>
    </div>
    <h1 class="text-white text-4xl uppercase font-bold text-center m-4">Tag</h1>
    <div class="flex justify-center">
        <div class="linerectangle"></div>
    </div>
    <div class="grid grid-cols-3 mt-10 space-y-5">
        @include('layouts.tagcard')
    </div>
@endsection