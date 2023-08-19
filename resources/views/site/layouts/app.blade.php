<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book System</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-slate-700">


    @yield('header')

    <div class="flex justify-center w-full h-3/4">
        @yield('content')
    </div>


    @yield('footer')



</body>

</html>
