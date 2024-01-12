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
        <h1 class='text-center text-2xl mb-8 text-white mt-8'>سوابق پشتیبانی</h1>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="px-3 text-xs py-1 bg-[#00000030] rounded-2xl absolute left-4 top-4 text-white">خروج</button>
        </form>
    </header>

    <div class='h-[75svh] flex flex-col items-center justify-start  bg-[#F3F7FB] w-full mx-auto p-5 pb-[70px] rounded-t-[80px] pt-10 overflow-y-scroll'>

        <div class="w-10/12 mx-auto">
           <div class="w-full my-8 bg-white py-4 px-6 rounded-2xl shadow-sm">
               <h3 class="font-bold text-[#09969A] mb-3">عنوان</h3>
               <p class="text-gray-600">متن ساختگی</p>
           </div>
           <div class="w-full my-8 bg-white py-4 px-6 rounded-2xl shadow-sm">
               <h3 class="font-bold text-[#09969A] mb-3">عنوان</h3>
               <p class="text-gray-600">متن ساختگی</p>
           </div>
           <div class="w-full my-8 bg-white py-4 px-6 rounded-2xl shadow-sm">
               <h3 class="font-bold text-[#09969A] mb-3">عنوان</h3>
               <p class="text-gray-600">متن ساختگی</p>
           </div>
           <div class="w-full my-8 bg-white py-4 px-6 rounded-2xl shadow-sm">
               <h3 class="font-bold text-[#09969A] mb-3">عنوان</h3>
               <p class="text-gray-600">متن ساختگی</p>
           </div>
        </div>

    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
