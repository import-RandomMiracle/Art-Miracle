@extends('layouts.main')

@section('content')
    <div class="mt-40 ">
        <h1 class="text-white text-4xl font-bold">Change To Artist</h1>
        <div class="grid grid-cols-2 m-5">
            <div class="text-white">
                <form action="/action_page.php">
                    <label for="img">Select image:</label>
                    <input type="file" id="img" name="img" accept="image/*">
                </form>
            </div>
    
            <div class="text-white space-y-5">
                <h1>User Name</h1>
                <input class="w-full" type="text" id="name">
                <h1>Artist Name</h1>
                <input class="w-full" type="text" id="artist_name">
                <h1>Phone Number</h1>
                <input class="w-full" type="text" id="phone_number">
                <h1>Confirm Password</h1>
                <input class="w-full" type="text" id="password">
            </div>
        </div>
        <div class="flex justify-center m-10">
            <button type="submit" class="applyButton">Apply</button>
        </div>
    </div>
    
@endsection
