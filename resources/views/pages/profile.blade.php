@extends('welcome')
@section('content')
    <div class="d-flex justify-content-center">
        <a href="{{route('home')}}">
            <img src="{{asset('img/Screenshot_6.png')}}" alt="">
        </a>
    </div>
    <h1 class="h3 mb-3 fw-normal text-center" style="color: white">Регистрация</h1>
    <form method="post">
        @csrf
        <div class="form-floating mt-3">
            <input type="text" class="form-control @error('firstname') is-invalid @enderror"
                   value="{{$user->firstname}}" name="firstname" id="floatingName" placeholder="Имя" required>
            <label for="floatingName" style="color: black">Фамилия</label>
        </div>
        @error('firstname')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating mt-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}"
                   name="name" id="floatingName" placeholder="Имя" required>
            <label for="floatingName" style="color: black">Имя</label>
        </div>
        @error('name')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating mt-3">
            <input type="text" class="form-control @error('otchestvo') is-invalid @enderror"
                   value="{{$user->otchestvo}}" name="otchestvo" id="floatingName" placeholder="Имя" required>
            <label for="floatingName" style="color: black">Отчество</label>
        </div>
        @error('otchestvo')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating  mt-3">
            <input type="date" class="form-control @error('burn') is-invalid @enderror" name="burn"
                   value="{{$user->burn}}" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput" style="color: black">Дата рождения</label>
        </div>
        @error('burn')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating  mt-3">
            <input type="text" class="form-control @error('passport') is-invalid @enderror" name="passport"
                   value="{{$user->passport}}" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput" style="color: black">Паспорт</label>
        </div>
        @error('passport')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
        <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Обновить данные</button>
    </form>
    <div class="row m-5">
        <div class="col-lg-4">
            <a href="" type="button" class="btn btn-warning"><h2 class="p-1">Изменить пароль</h2></a>
        </div>
        <div class="col-lg-4">
            <a href="" type="button" class="btn btn-danger"><h2 class="p-1">Удалить аккаунт</h2></a>
        </div>
    </div>
@endsection
