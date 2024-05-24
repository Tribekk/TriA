<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>TriA</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand d-flex" href="{{route('home')}}"><img src="{{asset('img/Screenshot_6.png')}}" alt=""
                                                                     style="width: 100px">
            <h1 class="ms-3 text-warning">ТриА</h1></a>
        <div class="d-flex">
            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g clip-path="url(#clip0_1276_5974)">
                        <path
                            d="M20 10C20 6.22881 20 4.34319 18.8284 3.17162C17.7653 2.10853 16.1143 2.01009 13 2.00098M20 14C20 17.7713 20 19.6569 18.8284 20.8285C17.6569 22 15.7712 22 12 22C8.22876 22 6.34315 22 5.17157 20.8285C4 19.6569 4 17.7713 4 14V11.001"
                            stroke="#c17c1a" stroke-width="1.5" stroke-linecap="round"></path>
                        <path
                            d="M2.73016 4H1.98016H2.73016ZM2.73016 4.8L2.17621 5.3056C2.31831 5.46129 2.51937 5.55 2.73016 5.55C2.94096 5.55 3.14202 5.46129 3.28412 5.3056L2.73016 4.8ZM4.01428 4.5056C4.29352 4.19966 4.27187 3.72528 3.96593 3.44604C3.65998 3.16681 3.1856 3.18846 2.90637 3.4944L4.01428 4.5056ZM2.55396 3.4944C2.27472 3.18846 1.80034 3.16681 1.4944 3.44604C1.18846 3.72528 1.16681 4.19966 1.44604 4.5056L2.55396 3.4944ZM10.2698 3.2L10.8238 2.6944C10.6817 2.53871 10.4806 2.45 10.2698 2.45C10.059 2.45 9.85798 2.53871 9.71588 2.6944L10.2698 3.2ZM8.98572 3.4944C8.70648 3.80034 8.72813 4.27472 9.03407 4.55396C9.34002 4.83319 9.8144 4.81154 10.0936 4.5056L8.98572 3.4944ZM10.446 4.5056C10.7253 4.81154 11.1997 4.83319 11.5056 4.55396C11.8115 4.27472 11.8332 3.80034 11.554 3.4944L10.446 4.5056ZM4.57638 6.30618C4.29935 5.99824 3.82514 5.97317 3.51719 6.2502C3.20925 6.52723 3.18419 7.00144 3.46122 7.30938L4.57638 6.30618ZM8.53968 1.83047C8.79878 2.15364 9.27081 2.20559 9.59398 1.94649C9.91715 1.68739 9.9691 1.21537 9.71 0.892194L8.53968 1.83047ZM6.38098 -0.75C3.88747 -0.75 1.98016 1.4426 1.98016 4H3.48016C3.48016 2.13913 4.84191 0.75 6.38098 0.75V-0.75ZM1.98016 4L1.98016 4.8H3.48016L3.48016 4L1.98016 4ZM3.28412 5.3056L4.01428 4.5056L2.90637 3.4944L2.17621 4.2944L3.28412 5.3056ZM3.28412 4.2944L2.55396 3.4944L1.44604 4.5056L2.17621 5.3056L3.28412 4.2944ZM6.61902 8.75C9.11253 8.75 11.0198 6.5574 11.0198 4H9.51984C9.51984 5.86087 8.15809 7.25 6.61902 7.25V8.75ZM11.0198 4V3.2H9.51984V4H11.0198ZM9.71588 2.6944L8.98572 3.4944L10.0936 4.5056L10.8238 3.7056L9.71588 2.6944ZM9.71588 3.7056L10.446 4.5056L11.554 3.4944L10.8238 2.6944L9.71588 3.7056ZM3.46122 7.30938C4.25148 8.18785 5.3685 8.75 6.61902 8.75V7.25C5.83415 7.25 5.11029 6.89968 4.57638 6.30618L3.46122 7.30938ZM9.71 0.892194C8.9139 -0.10079 7.72551 -0.75 6.38098 -0.75V0.75C7.22351 0.75 7.99759 1.15432 8.53968 1.83047L9.71 0.892194Z"
                            fill="#c17c1a"></path>
                        <path d="M15 19H9" stroke="#c17c1a" stroke-width="1.5" stroke-linecap="round"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_1276_5974">
                            <rect width="24" height="24" fill="white"></rect>
                        </clipPath>
                    </defs>
                </g>
            </svg>
            <div class="text-white">
                <strong>НАШ ТЕЛЕФОН</strong>
                <p><a href=""
                      class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">(3532)
                        946-446</a></p>
            </div>
        </div>
        <hr style="width: 2px; height: 60px; display: inline-block; border: 2px solid chocolate; margin: 0">
        <div class="d-flex">
            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z"
                        stroke="#c17c1a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M12 6V12" stroke="#c17c1a" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                    <path d="M16.24 16.24L12 12" stroke="#c17c1a" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"></path>
                </g>
            </svg>
            <div class="text-white">
                <strong>ВРЕМЯ РАБОТЫ</strong>
                <p class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">ПН-ПТ:
                    09-18 (+2 МСК)</p>
            </div>
        </div>
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
                                @role('admin|beginner|manager')
                                @role('admin')
                                <li><a class="dropdown-item" href="{{route('role')}}">Роли</a></li>
                                @endrole
                                <li><a class="dropdown-item" href="{{route('client')}}">Клиенты</a></li>
                                <li><a class="dropdown-item" href="{{route('category')}}">Категории</a></li>
                                <li><a class="dropdown-item" href="{{route('product')}}">Продукты</a></li>
                                @can('Просмотр заявки')
                                    <li><a class="dropdown-item" href="{{route('order')}}">Заявки</a></li>
                                @endcan
                                <li><a class="dropdown-item" href="{{route('worker')}}">Cотрудники</a></li>
                                @endrole
                                @role('user')
                                <li><a class="dropdown-item" href="{{route('user.product')}}">Продукция</a></li>
                                <li><a class="dropdown-item" href="{{route('cart')}}">Корзина</a></li>
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
<div class="mt-3">
    <h1>gfg</h1>
    @yield('background')
</div>
<div class="container mb-auto">
    <div class="mt-5">
        @yield('content')
    </div>
</div>
@yield('after')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>
