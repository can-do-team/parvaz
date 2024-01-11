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
<div class="w-full flex flex-wrap">
    <aside class="w-2/12 bg-gray-500 text-white min-h-[100svh] p-6">
        <nav>
            <ul class="flex flex-col gap-y-3">
                <li><a href="/admin-dashboard">خانه</a></li>
                <li><a href="/groups">گروه قطعی</a></li>
                <li><a href="">محل های پخش</a></li>
                <li><a href="">کاربران و مصارف</a></li>
                <li><a href="">احراز هویت</a></li>
                <li><a href="">پاسخگویی پشتیبانی</a></li>
            </ul>
        </nav>
    </aside>
    <main class="w-10/12  min-h[100svh] flex flex-col p-10 gap-x-5">
        <h1 class="text-3xl mb-8">ویرایش گروه</h1>


    </main>
</div>
</body>
</html>
