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
<body>
<div class='h-[100svh] text-blue-700 bg-gray-100 w-[420px] mx-auto p-5'>
    <div class="w-11/12 mx-auto p-6 bg-gray-300 rounded-2xl">
        <h2>قطعی آب گروه من</h2>
        <p>هفته اول ساعت ۸ تا ۱۴ - هفته دوم ساعت ۱۴ تا ۲۰</p>
        <a href="">نمایش همه گروه ها</a>
    </div>
    <nav class="flex items-start justify-between flex-wrap w-11/12 mx-auto py-5">
        <a href="" class="w-5/12 my-4 rounded-2xl flex justify-center items-center h-[15svh] text-white bg-gray-700 flex-wrap p-4 text-center">
            محل های پخش آب
        </a>
        <a href="" class="w-5/12 my-4 rounded-2xl flex justify-center items-center h-[15svh] text-white bg-gray-700 flex-wrap p-4 text-center">
            ویرایش اطلاعات من
        </a>
        <a href="" class="w-5/12 my-4 rounded-2xl flex justify-center items-center h-[15svh] text-white bg-gray-700 flex-wrap p-4 text-center">
            درخواست تایید مدارک
        </a>
        <a href="" class="w-5/12 my-4 rounded-2xl flex justify-center items-center h-[15svh] text-white bg-gray-700 flex-wrap p-4 text-center">
            گزارش مصرف
        </a>
        <a href="" class="w-5/12 my-4 rounded-2xl flex justify-center items-center h-[15svh] text-white bg-gray-700 flex-wrap p-4 text-center">
            پشتیبانی
        </a>
    </nav>
</div>
</body>
</html>
