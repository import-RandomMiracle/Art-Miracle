    <div class="mt-5">
        <h1 class="text-4xl text-white uppercase font-bold">{{$artwork['data']['art_name']}}</h1>
        <p class="text-white mt-5 font-bold">Creator</p>
        <ul class="flex">
            <li>
                <img class="rounded-full m-2" src="http://localhost:3000{{$artwork['data']['user']['profile']}}" alt="ProfileUser" height="" width="60">
            </li>
            <li class="mt-3.5 ml-4">
                <h1 class="text-white font-semibold">{{$artwork['data']['user']['display_name']}}</h1>
                <div class="flex text-gray-400">
                    <p>@</p>
                    <p>{{$artwork['data']['user']['user_name']}}</p>
                </div>
                
            </li>
        </ul>
        <p class="text-white mt-5 font-bold">Description</p>
        <div width="350">
            <p class="text-gray-400">{{$artwork['data']['description']}}</p>
        </div>
    </div>