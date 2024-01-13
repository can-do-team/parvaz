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
                <li><a href="/broadcasts">محل های پخش</a></li>
                <li><a href="">کاربران و مصارف</a></li>
                <li><a href="">احراز هویت</a></li>
                <li><a href="">پاسخگویی پشتیبانی</a></li>
            </ul>
        </nav>
    </aside>
    <main class="w-10/12  min-h[100svh] flex flex-col p-10 gap-x-5">
        <h1 class="text-3xl mb-8">گروه های قعطی آب</h1>
        <a class="flex justify-center items-center rounded-2xl bg-sky-300 px-8 py-5 my-6 " href="/groups">افزودن گروه جدید به لیست</a>
        <table class="mt-8 border border-collapse text-center">
            <thead>
            <tr class="bg-gray-100 ">
                <th class="w-2/12">عنوان </th>
                <th>آدرس</th>
                <th class="w-2/12">زمان پخش</th>
                <th class="w-1/12">عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($broadcasts as $broadcast)
                <tr class="border-b">

                    <td class="py-5">{{$broadcast->title}}</td>
                    <td class="py-5">{{$broadcast->address}}</td>
                    <td class="py-5">{{$broadcast->time}}</td>
                    <td class="py-5">
                        <form action="{{route("group-edit",$broadcast->id)}}" method="get">
                            @csrf
                            <button class="bg-sky-300 text-white px-4 py-2 rounded-2xl" type="submit">ویرایش</button>
                        </form>
                </tr>
            @endforeach

            </tbody>
        </table>

    </main>
</div>
</body>
</html>
