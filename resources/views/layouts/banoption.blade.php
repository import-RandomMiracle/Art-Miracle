<div class="flex justify-center">
    <div class="popupBanRectangle mt-48">
        <div class="mt-20">
            <div class="text-4xl text-center fontBanColor font-bold mt-2">
                Ban Option
            </div>
            <form method="POST" action="" class="justify-end">
                @csrf
                <div class="justify-center">
                    <div class="flex mt-4 ml-10 mr-10">
                        <h1 class="flex-none fontBanColor mr-2 font-bold text-2xl">BAN</h1>
                        <select class="flex-auto rounded-lg w-full bg-gray-300" name="" id="">
                            <div class="">
                                <option disabled selected>>>เลือก<<</option>
                                <optgroup label="-----------------------------">
                                    <option value="ปิดกันผู้ใช้ 7 วัน">ปิดกันผู้ใช้ 7 วัน</option>
                                    <option value="ปิดกันผู้ใช้ 1 เดือน">ปิดกันผู้ใช้ 1 เดือน</option>
                                    <option value="ปิดกันผู้ใช้ 3 เดือน">ปิดกันผู้ใช้ 3 เดือน</option>
                                </optgroup>
                                <optgroup label="-----------------------------">
                                    <option value="ปิดกันผู้ใช้ถาวร">ปิดกันผู้ใช้ถาวร</option>
                                </optgroup>
                            </div>
                        </select>
                    </div>
                </div>

                <div class="flex items-center justify-center mt-4">
                    <button class="banPopupButton font-bold text-white text-2xl">
                        BAN
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
