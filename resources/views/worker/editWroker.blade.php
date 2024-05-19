@extends('welcome')
@section('content')
    <form method="post" action="">
        @csrf
        <div class="d-flex justify-content-center">
            <a href="{{route('home')}}">
                <img src="{{asset('img/Screenshot_6.png')}}" alt="">
            </a>
        </div>
        <h1 class="my-3 fw-normal text-center">Редактирование работника</h1>

        <div class="form-floating mt-3">
            <input type="text" class="form-control @error('firstname') is-invalid @enderror" value="{{$worker->firstname}}" name="firstname" id="floatingName" placeholder="Имя" required>
            <label for="floatingName" style="color: black">Фамилия</label>
        </div>
        @error('firstname')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating mt-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$worker->name}}" name="name" id="floatingName" placeholder="Имя" required>
            <label for="floatingName" style="color: black">Имя</label>
        </div>
        @error('name')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating mt-3">
            <input type="text" class="form-control @error('otchestvo') is-invalid @enderror" value="{{$worker->otchestvo}}" name="otchestvo" id="floatingName" placeholder="Имя" required>
            <label for="floatingName" style="color: black">Отчество</label>
        </div>
        @error('otchestvo')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating  mt-3">
            <input type="date" class="form-control @error('burn') is-invalid @enderror" value="{{$worker->burn}}" name="burn"
                   id="floatingInput" placeholder="name@example.com" >
            <label for="floatingInput" style="color: black">Дата рождения</label>
        </div>
        @error('burn')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating  mt-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$worker->email}}" id="floatingInput" placeholder="name@example.com" >
            <label for="floatingInput" style="color: black">Эл.почта</label>
        </div>
        @error('email')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating mt-3">
            <select class="form-select" id="floatingSelect" name="role" aria-label="Floating label select example">
                <option selected>Откройте это меню выбора</option>
                @foreach($roles as $role)
                    <option value="{{$role->name}}" @if($role->name === $worker->getRoleNames()[0]) selected @endif>{{$role->name}}</option>
                @endforeach
            </select>
            <label for="floatingSelect">Роль</label>
        </div>
        @error('$role')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating mt-3">
            <input type="text" class="form-control @error('number') is-invalid @enderror" value="{{$worker->number}}"  name="number" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword" style="color: black">Номер телефона</label>
            @error('number')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-success my-3 w-100 py-2" type="submit">Изменить</button>

    </form>
@endsection
