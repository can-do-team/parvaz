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
<form class='h-[100svh] text-blue-700 bg-gray-100 w-[420px] mx-auto p-5' action="/register" method="post">
    @csrf
<h1 class='text-center text-2xl mb-8'>ثبت نام</h1>
    <input id='firstname' name='firstname' class='w-full px-3 py-1 my-5 rounded-[8px]' type="text" placeholder='نام'/>
    <input id='lastname' name='lastname' class='w-full px-3 py-1 my-5 rounded-[8px]' type="text" placeholder='نام خانوادگی'/>
    <input id='number' name='number' class='w-full px-3 py-1 my-5 rounded-[8px]' type="text" placeholder='شماره موبایل'/>
    <input id='password' name='password' class='w-full px-3 py-1 my-5 rounded-[8px]' type="password" placeholder='رمز عبور'/>
    <input id='repassword' name='repassword' class='w-full px-3 py-1 my-5 rounded-[8px]' type="password" placeholder='تکرار رمز عبور'/>
    <select name="area">
        <option value="">انتخاب منطقه</option>
        <option value="1">منطقه 1</option>
        <option value="2">منطقه 2</option>
        <option value="3">منطقه 3</option>
        <option value="4">منطقه 4</option>
    </select>
    <select name="group_id">
        <option value="">انتخاب گروه</option>
        <option value="1">گروه 1</option>
        <option value="2">گروه 2</option>
        <option value="3">گروه 3</option>
        <option value="4">گروه 4</option>
        <option value="5">گروه 5</option>
    </select>
<br/>

<input class='bg-blue-700 text-white py-3 px-2 my-5 rounded-2xl w-full' type="submit" value="ثبت نام"/>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p class="text-red-900">{{$error}}</p>
        @endforeach
    @endif
</form>
</body>
</html>
