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
    <aside class="w-2/12 bg-gray-500 text-white h-[100svh] p-6">
        <nav>
            <ul class="flex flex-col gap-y-3">
                <li><a href="">گروه قطعی</a></li>
                <li><a href="">محل های پخش</a></li>
                <li><a href="">کاربران و مصارف</a></li>
                <li><a href="">احراز هویت</a></li>
                <li><a href="">پاسخگویی پشتیبانی</a></li>
            </ul>
        </nav>
    </aside>
    <main class="w-10/12 flex  p-10 gap-x-5">
        <a class="flex h-[20svh] justify-center items-center rounded-2xl bg-sky-300 px-8 py-5 " href="">گروه قطعی</a>
        <a class="flex h-[20svh] justify-center items-center rounded-2xl bg-sky-300 px-8 py-5 " href="">محل های پخش</a>
        <a class="flex h-[20svh] justify-center items-center rounded-2xl bg-sky-300 px-8 py-5 " href="">کاربران و مصارف</a>
        <a class="flex h-[20svh] justify-center items-center rounded-2xl bg-sky-300 px-8 py-5 " href="">احراز هویت</a>
        <a class="flex h-[20svh] justify-center items-center rounded-2xl bg-sky-300 px-8 py-5 " href="">پاسخگویی پشتیبانی</a>
    </main>
</div>
</body>
</html>
