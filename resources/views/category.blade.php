@extends('layouts.main')

@section('content')
    <div class="flex justify-center mt-40">
        <div class="linerectangle"></div>
    </div>
    <h1 class="text-white text-4xl uppercase font-bold text-center m-4">Category</h1>
    <div class="flex justify-center">
        <div class="linerectangle"></div>
    </div>
    <div class="grid grid-cols-2 mt-10">
        @include('layouts.categorycard')
    </div>
@endsection