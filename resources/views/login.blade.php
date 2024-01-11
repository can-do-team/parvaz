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
<div class=" w-[420px] h-[80svh] bg-[#09969A] mx-auto rounded-2xl">
    <header class="w-full h-[25svh] flex justify-center items-start">
        <img src="{{URL::asset('images/bg-login-small.png')}}" class="w-full" alt="">
    </header>
    <form class='h-[55svh]  bg-[#F3F7FB] w-full mx-auto p-5 rounded-t-[80px]' action="/login" method="post">
        @csrf
        <h1 class='text-center text-2xl mb-8 text-[#09969A]'>ورود</h1>
        <input id='number' name='number' class='outline-0 border-0 px-4 py-5 shadow-xl w-full  my-5 rounded-[8px]' type="text" placeholder='موبایل خود را وارد کنید ...'/>
        <input id='password' name='password' class='outline-0 border-0 px-4 py-5 shadow-xl w-full  my-5 rounded-[8px]' type="password" placeholder='رمز عبور را وارد کنید ...'/>
        <br/>
        <input class='bg-[#09969A] text-white py-3 px-2 my-5 rounded-2xl  shadow-xl w-full hover:bg-[#09868A]' type="submit" value="ورود"/>
        <a href="/register" class="flex text-center w-full justify-center items-center mt-4 underline text-[#707175]">حساب کاربری ندارم</a>
    </form>

</div>
</body>
</html>
