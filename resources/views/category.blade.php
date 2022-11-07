@extends('layouts.newmain')

@section('content')
    <div class="flex justify-center mt-40">
        <div class="linerectangle"></div>
    </div>
    <h1 class="text-white text-4xl uppercase font-bold text-center m-4">Category</h1>
    <div class="flex justify-center">
        <div class="linerectangle"></div>
    </div>
    <div class="grid grid-col-1 mt-10 mx-auto w-7/12 space-y-10">
        @include('layouts.categorycard')
    </div>
@endsection