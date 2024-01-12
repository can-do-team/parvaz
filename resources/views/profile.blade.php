<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
    </style>
</head>
<body class="bg-black flex justify-center items-center h-[100svh]">
<div class=" w-[420px] h-[85svh] bg-[#09969A] mx-auto rounded-2xl overflow-y-scroll relative ">
    <header class="w-full min-h-[10svh] flex justify-center items-center">
        <h1 class='text-center text-2xl mb-8 text-white mt-8'>حساب کاربری</h1>
        <a href="/dashboard" type="submit" class="px-3 text-xs py-1 bg-[#00000030] rounded-2xl absolute left-4 top-4 text-white">بازگشت</a>
    </header>

    <form action="" method="post" class='h-[75svh] flex flex-col items-center justify-start  bg-[#F3F7FB] w-full mx-auto p-5 pb-[80px] rounded-t-[80px] pt-10  overflow-y-scroll'>

        <input id='firstname' name='firstname' class='w-10/12 mx-auto outline-0 border-0 px-4 py-4 shadow-xl   my-3 rounded-[8px]' type="text" placeholder='نام خود را وارد کنید ...' value="{{$user->firstname}}"/>
        <input id='lastname' name='lastname' class='w-10/12 mx-auto outline-0 border-0 px-4 py-4 shadow-xl   my-3 rounded-[8px]' type="text" placeholder='نام خانوادگی خود را وارد کنید ...' value="{{$user->lastname}}"/>
        <input id='number' name='number' class='w-10/12 mx-auto outline-0 border-0 px-4 py-4 shadow-xl   my-3 rounded-[8px]' type="text" placeholder='شماره موبایل خود را وارد کنید ...' value="{{$user->number}}"/>

        <div class="flex flex-wrap mt-5 w-10/12 mx-auto">

            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">نوتیفیکشن قطعی آب</h3>
            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="horizontal-list-radio-passport" checked type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-passport" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">عدم دریافت </label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="horizontal-list-radio-license" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">دریافت  </label>
                    </div>
                </li>
            </ul>
        </div>
        <div class="flex flex-wrap mt-10 w-10/12 mx-auto">

            <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">نوتیفیکشن تغییرات بودجه بندی آب</h3>
            <ul class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="horizontal-list-radio-passport" checked type="radio" value="" name="list-radio2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-passport" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">عدم دریافت </label>
                    </div>
                </li>
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center ps-3">
                        <input id="horizontal-list-radio-license" type="radio" value="" name="list-radio2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="horizontal-list-radio-license" class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">دریافت  </label>
                    </div>
                </li>
            </ul>
        </div>
        <input class='w-10/12 mx-auto mt-10 bg-[#09969A] text-white py-3 px-2 mb-3 rounded-2xl  shadow-xl hover:bg-[#09868A]' type="submit" value="ویرایش اطلاعات"/>

    </form>
    <footer class="bg-[#09969A] h-[80px] w-full absolute bottom-0 flex justify-around items-center rounded-t-[55px] text-center">
        <a href="/profile" class="flex flex-col justify-between items-center text-white text-sm p-2 hover:bg-[#00000020] w-3/12 rounded-full">
            <img src="{{URL::asset('images/user.svg')}}" class="mb-1" alt="">
            حساب کاربری
        </a>
        <a href="/dashboard" class="flex flex-col justify-between items-center text-white text-sm p-2 hover:bg-[#00000020] w-3/12 rounded-full">
            <img src="{{URL::asset('images/home.svg')}}" class="mb-1" alt="">
            خانه
        </a>
        <a href="/support" class="flex flex-col justify-between items-center text-white text-sm p-2 hover:bg-[#00000020] w-3/12 rounded-full">
            <img src="{{URL::asset('images/chat.svg')}}" class="mb-1" alt="">
            پشتیبانی
        </a>
    </footer>
</div>
</body>
</html>
