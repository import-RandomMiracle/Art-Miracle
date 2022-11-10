@extends('layouts.adminmain')

@section('content')
    <div class="space-y-10 mr-2">
        <div class="space-y-10">
            <div>
                <div class="mx-auto w-7/12">
                    
                    @foreach($reports['data'] as $report)
                        @if($report['report_type'] == 'user')
                            <div>
                                    <ul class="flex">
                                        <li>
                                            <img class="rounded-full m-2" src="http://localhost:3000{{$report['reportable_type']['profile']}}" alt="ProfileUser" height="" width="60">
                                        </li>
                                        <li class="flex mt-3.5 ml-4 space-x-10">
                                            <div>
                                                <h1 class="text-white font-semibold">{{$report['reportable_type']['display_name']}}</h1>
                                                <div class="flex text-gray-400">
                                                <p>@</p>
                                                <p>{{$report['reportable_type']['user_name']}}</p>
                                                </div>
                                            </div>
                                            <div class="flex space-x-10">
                                                <button class="viewButton">view</button>
                                                <button class="banButton">ban</button>
                                            </div>
                                        </li>
                                    </ul>
                            </div>
                        @endif
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
