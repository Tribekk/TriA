@extends('welcome')
@section('content')
    <form method="post" action="" enctype="multipart/form-data">
        @csrf
        <div class="d-flex justify-content-center">
            <a href="{{route('home')}}">
                <img src="{{asset('img/Screenshot_6.png')}}" alt="">
            </a>
        </div>
        <h1 class="my-3 fw-normal text-center">Создание продукта</h1>

        <div class="form-floating mt-3">
            <input class="form-control form-control-lg mt-3" id="formFileLg" type="file" name="file">
            <label for="floatingName" style="color: black">Фото продукта</label>
        </div>

        <div class="form-floating mt-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" id="floatingName" placeholder="Имя" required>
            <label for="floatingName" style="color: black">Название</label>
        </div>
        @error('name')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating  mt-3">
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                   id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput" style="color: black">Цена</label>
        </div>
        @error('price')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating mt-3">
            <select class="form-select" id="floatingSelect" name="measurement" aria-label="Floating label select example">
                <option selected>Откройте это меню выбора</option>
                <option value="шт.">шт.</option>
                <option value="мес.">мес.</option>
                <option value="др.">др.</option>
            </select>
            <label for="floatingSelect">Мера измерения</label>
        </div>
        @error('measurement')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <div class="form-floating mt-3">
            <select class="form-select" id="floatingSelect" name="category_id" aria-label="Floating label select example">
                <option selected>Откройте это меню выбора</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <label for="floatingSelect">Категория</label>
        </div>
        @error('category_id')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <button class="btn btn-success my-3 w-100 py-2" type="submit">Создать</button>

    </form>
@endsection
