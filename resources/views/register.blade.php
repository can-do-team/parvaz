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
<div class=" w-[420px] h-[80svh] bg-[#09969A] mx-auto rounded-2xl overflow-y-scroll">
    <header class="w-full min-h-[10svh] flex justify-center items-center">
{{--        <img src="{{URL::asset('images/bg-login-small.png')}}" class="w-full" alt="">--}}
        <h1 class='text-center text-2xl mb-8 text-white  mt-4'>ثبت نام</h1>

    </header>
    <form class='min-h-[70svh] flex justify-center flex-col  bg-[#F3F7FB] w-full mx-auto p-5 rounded-t-[80px]  overflow-y-scroll' action="/register" method="post">
        @csrf
        @if ($errors->any())
            <div class="w-10/12 mx-auto bg-red-100 text-right p-4 mt-4 rounded-2xl">
                @foreach ($errors->all() as $error)
                    <p class="text-red-600">{{$error}}</p>
                @endforeach
            </div>
        @endif
        <input id='firstname' name='firstname' class='w-10/12 mx-auto outline-0 border-0 px-4 py-4 shadow-xl   my-3 rounded-[8px]' type="text" placeholder='نام خود را وارد کنید ...'/>
        <input id='lastname' name='lastname' class='w-10/12 mx-auto outline-0 border-0 px-4 py-4 shadow-xl   my-3 rounded-[8px]' type="text" placeholder='نام خانوادگی خود را وارد کنید ...'/>
        <input id='number' name='number' class='w-10/12 mx-auto outline-0 border-0 px-4 py-4 shadow-xl   my-3 rounded-[8px]' type="text" placeholder='شماره موبایل خود را وارد کنید ...'/>
        <input id='password' name='password' class='w-10/12 mx-auto outline-0 border-0 px-4 py-4 shadow-xl   my-3 rounded-[8px]' type="password" placeholder='رمز عبور را وارد کنید ...'/>
        <input id='repassword' name='repassword' class='w-10/12 mx-auto outline-0 border-0 px-4 py-4 shadow-xl   my-3 rounded-[8px]' type="password" placeholder='تکرار رمز عبور را وارد کنید ...'/>
        <select name="area" class="w-10/12 mx-auto outline-0 border-0 px-4 py-4 shadow-xl   my-3 rounded-[8px]">
            <option value="">انتخاب منطقه شهرداری</option>
            <option value="1">منطقه 1</option>
            <option value="2">منطقه 2</option>
            <option value="3">منطقه 3</option>
            <option value="4">منطقه 4</option>
        </select>
        <select name="area" class="w-10/12 mx-auto outline-0 border-0 px-4 py-4 shadow-xl   mt-3 mb-1 rounded-[8px]">
            <option value="">انتخاب گروه</option>
            <option value="1">گروه 1</option>
            <option value="2">گروه 2</option>
            <option value="3">گروه 3</option>
            <option value="4">گروه 4</option>
            <option value="5">گروه 5</option>
            <option value="5">گروه 6</option>
            <option value="5">گروه 7</option>
            <option value="5">گروه 8</option>
            <option value="5">گروه 9</option>
        </select>
        <a href="" class="flex justify-center text-center text-sm text-[#09969A] mb-1 hover:text-[#09666A]">مشاهده محلات مربوط به هر گروه</a>

        <br/>
        <input class='w-10/12 mx-auto bg-[#09969A] text-white py-3 px-2 mt-5 mb-3 rounded-2xl  shadow-xl hover:bg-[#09868A]' type="submit" value="ثبت نام"/>
        <a href="/login" class="text-center text-gray-400 text-sm">بازگشت به صفحه ورود</a>

    </form>
</div>

</body>
</html>
