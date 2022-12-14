@extends('layouts.adminmain')

@section('content')
    <div>
        <div class="grid gridTwoCols grid-cols-4 items-center">
            
            @foreach($reports['data'] as $report)
                @if($report['report_type'] == 'artwork')
                    <div class="snap-start scroll-mx-6 shrink-0 postimg">
                        <a href="/artwork/detail">
                            <img class="postImage" src="http://localhost:3000{{$report['reportable_type']['image']}}" alt="Miracle Work" height="" width="300" >
                            <div class="flex justify-between m-1">
                                <div class="truncate">
                                    <h1 class="truncate font-bold w-50 ml-2">{{$report['reportable_type']['art_name']}}</h1>
                                    <p class="text-sm row-span-2 col-span-2 ml-2">Price : {{$report['reportable_type']['price']}} AC</p>
                                </div>
                                <div>
                                    <button class="flex">
                                        <p class="mt-1.5">{{$report['reportable_type']['likes']}}</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart float-right m-2" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
        @endforeach
        </div>
    </div>
@endsection
