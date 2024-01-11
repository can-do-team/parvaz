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
        <h1 class='text-center text-2xl mb-8 text-white  mt-8'>برنامه بودجه بندی آب</h1>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" href="" class="px-3 text-xs py-1 bg-[#00000030] rounded-2xl absolute left-4 top-4 text-white">خروج</button>
        </form>
    </header>

    <div class='h-[75svh] flex flex-col items-start justify-center  bg-[#F3F7FB] w-full mx-auto p-5 pb-[80px] rounded-t-[80px]  overflow-y-scroll'>


        <div class="w-11/12 mx-auto p-6 bg-white shadow rounded-2xl mb-5">
            <h2 class="text-[#09969A] text-center mb-4">قطعی آب </h2>
            <p class="mb-3">مدیریت فشار آب در گروه منطقه شما
                این هفته در <span class="font-bold text-[#09767A] animate-pulse mx-3">ساعات 8 تا 15</span> انجام
                میشود.</p>
            <a href="/group/user" class="text-[#707175] hover:text-[#09969A] underline">نمایش همه گروه ها</a>
        </div>
        <nav class="w-11/12 mx-auto flex flex-wrap justify-between">
        <a href="/broadcast/user" class="w-5/12 my-4 rounded-2xl flex justify-center items-center shadow hover:bg-[#eeeeee] h-[15svh] text-black bg-[#FFFFFF]  flex-wrap p-4 text-center">
            توزیع آب
            در محل
        </a>
        <a href="" class="w-5/12 my-4 rounded-2xl flex justify-center items-center shadow hover:bg-[#eeeeee] h-[15svh] text-black bg-[#FFFFFF]  flex-wrap p-4 text-center">
            گزارش کیفیت
            آب
        </a>
        <a href="" class="w-5/12 my-4 rounded-2xl flex justify-center items-center shadow hover:bg-[#eeeeee] h-[15svh] text-black bg-[#FFFFFF]  flex-wrap p-4 text-center">
            امور مشترکین
        </a>
        <a href="/report/consumption" class="w-5/12 my-4 rounded-2xl flex justify-center items-center shadow hover:bg-[#eeeeee] h-[15svh] text-black bg-[#FFFFFF]  flex-wrap p-4 text-center">
            گزارش مصرف
            من
        </a>
        </nav>
    </div>
    <footer class="bg-[#09969A] h-[80px] w-full absolute bottom-0 flex justify-around items-center rounded-t-[55px] text-center">
        <a href="" class="flex flex-col justify-between items-center text-white text-sm p-2 hover:bg-[#00000020] w-3/12 rounded-full">
            <img src="{{URL::asset('images/user.svg')}}" class="mb-1" alt="">
            حساب کاربری
        </a>
        <a href="/dashboard" class="flex flex-col justify-between items-center text-white text-sm p-2 hover:bg-[#00000020] w-3/12 rounded-full">
            <img src="{{URL::asset('images/home.svg')}}" class="mb-1" alt="">
            خانه
        </a>
        <a href="" class="flex flex-col justify-between items-center text-white text-sm p-2 hover:bg-[#00000020] w-3/12 rounded-full">
            <img src="{{URL::asset('images/chat.svg')}}" class="mb-1" alt="">
            پشتیبانی
        </a>
    </footer>
</div>
</body>
</html>
