@extends('welcome')
@section('content')
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex" role="search" method="GET">
        <input type="search" class="form-control m-3 p-2"
               @isset($_GET['search_field']) value="{{$_GET['search_field']}}"
               @endisset placeholder="Найти продукт" aria-label="Search" name="search_field">
        <button type="submit" class="btn btn-outline-light text-bg-dark m-3">Найти</button>
    </form>
    @foreach($products as $product)
        <div class="row m-5">
            <div class="col-lg-4">
                <h1>{{$product->name}}</h1>
                <p>{{$product->category->name}}</p>
            </div>
            <div class="col-lg-4">
                @if(auth()->user()->can('Добавление продукции'))
                    <a href="{{route('edit.product', ['product' => $product])}}" type="button"
                       class="btn btn-primary px-3">Изменить</a>
                @endif
                @if(auth()->user()->can('Обновление продукции'))
                    <a href="{{route('delete.product', ['product' => $product])}}" type="button"
                       class="btn btn-danger ms-2 px-3">Удалить</a>
                @endif
            </div>
        </div>
    @endforeach
    @if(auth()->user()->can('Удаление продукции'))
        <a href="{{route('add.product')}}" type="button" class="btn btn-success px-5 py-3">Добавить</a>
    @endif
@endsection
