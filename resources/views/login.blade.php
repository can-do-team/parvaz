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
<form class='h-[100svh] text-blue-700 bg-gray-100 w-[420px] mx-auto p-5' action="/login" method="post">
    @csrf
<h1 class='text-center text-2xl mb-8'>ورود</h1>
    <input id='number' name='number' class='w-full px-3 py-1 my-5 rounded-[8px]' type="text" placeholder='نام کاربری'/>
    <input id='password' name='password' class='w-full px-3 py-1 my-5 rounded-[8px]' type="password" placeholder='رمز عبور'/>
<br/>
<input class='bg-blue-700 text-white py-3 px-2 my-5 rounded-2xl w-full' type="submit" value="ورود"/>
</form>
</body>
</html>
