@extends('welcome')
@section('content')
    <div class="container form-signin w-100 m-auto align-items-center py-4">
        <div class="row">
            <div class="col-lg-4">
            </div>
            <div class="col-lg-4">
                <form method="post">
                    @csrf
                    <div class="d-flex justify-content-center">
                        <a href="{{route('home')}}">
                            <img src="{{asset('img/Screenshot_6.png')}}" alt="">
                        </a>
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center" style="color: white">Вход</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control @error('login') is-invalid @enderror" name="login" id="floatingInput"
                               placeholder="name@example.com">
                        <label for="floatingInput" style="color: black">Логин</label>
                    </div>
                    @error('login')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                    <div class="form-floating mt-5">
                        <input type="password" class="form-control" name="password" id="floatingPassword"
                               placeholder="Password">
                        <label for="floatingPassword" style="color: black">Пароль</label>
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Оставаться в системе
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2" type="submit">Войти</button>
                    <div class="container mt-2">
                        <a href="{{route('signup')}}" class="link mt-5">Регистрация</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
