<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>TriA</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex" href="#"><img src="{{asset('img/Screenshot_6.png')}}" alt=""
                                                     style="width: 100px">
            <h1 class="ms-3 text-warning">ТриА</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
             aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Продвижение 1С продукции</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                @guest()
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Аккаунт
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="{{route('login')}}">Вход</a></li>
                                <li><a class="dropdown-item" href="{{route('signup')}}">Регистрация</a></li>
                            </ul>
                        </li>
                    </ul>
                @endguest
                @auth()
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                {{auth()->user()->name}}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="{{route('profile')}}">Профиль</a></li>
                                @role('admin')
                                <li><a class="dropdown-item" href="{{route('role')}}">Роли</a></li>
                                <li><a class="dropdown-item" href="{{route('client')}}">Клиенты</a></li>
                                <li><a class="dropdown-item" href="{{route('category')}}">Категории</a></li>
                                <li><a class="dropdown-item" href="{{route('product')}}">Продукты</a></li>
                                <li><a class="dropdown-item" href="#">Работники</a></li>
                                <li><a class="dropdown-item" href="#">Договор</a></li>
                                @endrole
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{route('logout')}}">Выход</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="position-absolute bottom-0 end-0">
                        @role('admin')
                        <h5>Администратор</h5>
                        @endrole
                        @role('manager')
                        <h5>Мэнеджер</h5>
                        @endrole
                        @role('beginner')
                        <h5>Сотрудник</h5>
                        @endrole
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
<div class="container mb-auto">
    <div class="mt-3">
        <h1>gfg</h1>
        <div class="mt-5">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
