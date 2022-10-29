@foreach($users['data'] as $user)
    <div class="postimg">
        <img class="postImage" src="/images/Artist-1.png" alt="Miracle Work" height="" width="300" >
        <h1 class="ml-2 textArtistPost font-bold">
            Artist Name : {{$user['display_name']}}
        </h1>
        <p class="ml-2 textArtistPost text-sm">Follower : 15000 people</p>
    </div>
@endforeach