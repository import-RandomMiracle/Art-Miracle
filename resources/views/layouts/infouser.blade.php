<div class="dropdown">
    <button class="flex justify-center dropbtn">
    <img class="rounded-full ml-4 mt-4 mb-4" src="/images/Proflie.png" alt="Miracle Work" height="" width="50" >
    <div class="mt-5 ml-2 mb-4">
        <h1 class="text-white text-sm">{{$currentUser['data']['display_name']}}</h1>
        <div class="flex text-gray-300 text-sm underline">
            <p>@</p>
            <p>{{$currentUser['data']['user_name']}}</p>
        </div>
        
    </div>
</button>
    <div class="dropdown-content justify-items-start">
        <a href="/account">Profile</a>
        <a href="#">Notification</a>
        <a href="sendfeedback">Feedback</a>
        <div class="linerectangleBlack w-full"></div>
        <a href="/login">Logout</a>
    </div>
</div>
