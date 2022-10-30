<div class="flex justify-center">
    <div class="popupRectangle mt-48">
        <div class="text-4xl text-center fontColor font-bold mt-2">
            GIFT TO
        </div>
        <form method="POST" action="" class="justify-end">
            @csrf

            <div class="justify-center">
                <div class="flex mt-4 ml-10 mr-10">
                    <h1 class="flex-none fontColor mr-2 font-bold">User Name</h1>
                    <input class="flex-auto block mt-1 w-full rounded-lg bg-gray-300" type="text" name="name" required autofocus />
                </div>
                <div class="flex mt-4 ml-10 mr-10">
                    <h1 class="flex-none fontColor mr-2 font-bold">Description</h1>
                    <textarea rows="4" type="text" name="description" class="flex-auto mt-1 w-full rounded-lg bg-gray-300" required></textarea>

                </div>
            </div>

            <div class="flex items-center justify-center mt-4">
                <button class="sendButton font-bold text-white text-2xl">
                    Send
                </button>
            </div>
        </form>
    </div>
</div>
