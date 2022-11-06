<div>

    <ul class="flex wrapScreen justify-center mt-40 space-x-7">
        <li>
            <img class="rounded-full mb-4" src="/images/Profile-2.png" alt="UserProfile" height="" width="200" >
        </li>
        <li>
            <div class="space-y-5">
                <div class="flex space-x-10 mr-6">
                    <h1 class="text-white text-xl font-bold">{{$user['data']['display_name']}}</h1>
                    <button class="editProfileButton text-white text-sm">Edit Profile</button>
                    <a href="/wallet">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFFFFF" class="bi bi-wallet2" viewBox="0 0 16 16">
                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                        </svg>
                    </a>
                    <button id="myBtn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#FFCB44" class="bi bi-flag-fill" viewBox="0 0 16 16">
                        <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                    </svg>
                    </button>
                </div>
                <ul class="space-y-5">
                    <li class="flex justify-start space-x-10 text-white mr-6">
                        <div class="flex space-x-2">
                            <p>{{$user['data']['follower_count']}}</p>
                            <p>followers</p>
                        </div>
                        <div class="flex space-x-2">
                            <p>{{$user['data']['following_count']}}</p>
                            <p>following</p>
                        </div>
                    </li>
                    <li>
                        <p class="text-gray-300 mr-4">Hello my name is miracle you can see my artwork on profile now</p>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
</div>


<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      @include('layouts.reportuser')
    </div>
  
</div>

<script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}
</script>

