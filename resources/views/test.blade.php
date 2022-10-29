<div>
    Test
</div>
@foreach($users['data'] as $user)
    <p>
        id : {{$user['id']}}
        display_name : {{$user['display_name']}}
    </p>
@endforeach
