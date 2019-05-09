<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <header class="bg-primary">

        <span class="text-warning font-weight-bold">Blockboster</span>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><span class="fa fa-search"></span></div>
                    </div>
                    <input type="text" placeholder="Search">
                </div>
            </li>
            <li class="nav-item"><a href="" class="nav-link text-white">Inicio</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Compras</a></li>
            <li class="nav-item"><a href="" class="nav-link text-white">Peliculas</a></li>
            <li class="nav-item"><a href="{{url("generos")}}" class="nav-link text-white">Generos</a></li>
            <li class="nav-item"><a href="/cesar" class="nav-link text-white">Cesar</a></li>
            <li class="nav-item"><a href="/vic" class="nav-link text-white">Victor</a></li>
            <li class="nav-item"><a href="/angeles" class="nav-link text-white">Angeles</a></li>
            <li class="nav-item"><a href="/ana" class="nav-link text-white">Ana</a></li>
            <li class="nav-item"><a href="{{url("/jonathan")}}" class="nav-link text-white">JONATHAN</a></li>
        </ul>
    </header>
    <main class="container">
        @yield("content")
    </main>
    <footer class="bg-primary text-center">
       <span class="text-warning"> Powered by Harlock</span>
    </footer>
</body>
</html>