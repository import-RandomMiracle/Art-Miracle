@foreach($users['data'] as $user)
        <div class="postimg">
            <img class="postImage" src="http://localhost:3000{{$user['image']}}" alt="Miracle Work" height="" width="300" >
            <h1 class="truncate ml-2 textArtistPost font-bold">{{$user['display_name']}}</h1>
            <p class="ml-2 textArtistPost text-sm">Follower : {{$user['followers']}} people</p>
        </div>
@endforeach