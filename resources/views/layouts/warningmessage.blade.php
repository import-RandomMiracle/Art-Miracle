<div class="flex justify-center">
    <div class="popupBanRectangle mt-48">
        <div class="text-4xl text-center fontBanColor font-bold mt-2">
            Enter Warning Message
        </div>
        <form method="POST" action="" class="justify-end">
            @csrf

            <div class="justify-center">
                <div class="flex mt-4 ml-10 mr-10">
                    <h1 class="flex-none fontBanColor mr-2 font-bold text-xl">Message: </h1>
                    <select class="flex-auto rounded-lg w-full bg-gray-300" name="" id="">
                        <div class="">
                            <option disabled selected>>>เลือกรายการ<<</option>
                            <optgroup label="-----------------------------">
                                <option value="ปิดกันผู้ใช้ 7 วัน">บัญชีของคุณทำผิดกฎข้อบังคับ</option>
                                <option value="ปิดกันผู้ใช้ 1 เดือน">เนื้อหาของคุณไม่เหมาะสม</option>
                                <option value="ปิดกันผู้ใช้ 3 เดือน">กรุณาติดต่อผู้ดูแลระบบ</option>
                            </optgroup>
                            <optgroup label="-----------------------------">
                                <option value="ปิดกันผู้ใช้ถาวร">อื่นๆ</option>
                            </optgroup>
                        </div>
                    </select>
                </div>
                <div class="flex mt-4 ml-10 mr-10">
                    <h1 class="flex-none fontBanColor mr-2 font-bold">Description: </h1>
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
