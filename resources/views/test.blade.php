@extends('layouts.main')

@section('content')
    <div>
        @include('layouts.warningmessage')
    </div>

    <div>
        @include('layouts.popupgiftto')
    </div>

    <div>
        @include('layouts.confirmbanuser')
    </div>
    <div>
        @include('layouts.confirmtransfer')
    </div>

@endsection
