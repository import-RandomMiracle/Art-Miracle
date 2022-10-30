<div class="flex justify-center">
    <div class="popupBanRectangle mt-48">
        <div class="text-4xl text-center fontBanColor font-bold mt-2">
            Report This Product
        </div>
        <form method="POST" action="" class="justify-end">
            @csrf

            <div class="justify-center">
                <div class="mt-4 ml-10 mr-10">
                    <h1 class="fontYellowColor mr-2 font-bold">Enter Report Description</h1>
                    <textarea rows="6" type="text" name="description" class="mt-1 w-full rounded-lg bg-gray-300" required></textarea>

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
