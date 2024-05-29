@extends('welcome')
@section('content')
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex" role="search" method="GET">
        <input type="search" class="form-control m-3 p-2"
               @isset($_GET['search_field']) value="{{$_GET['search_field']}}"
               @endisset placeholder="Найти продукт" aria-label="Search" name="search_field">
        <button type="submit" class="btn btn-outline-light text-bg-dark m-3">Найти</button>
    </form>
    <div class="container mt-5">
        <h1>Товары</h1>
        <div class="row mt-5">
            @foreach($categories as $category)
                <h2 class="mt-5">{{$category->name}}</h2>
                @foreach($category->products as $product)
                    <div class="col-lg-3 text-center mt-5">
                        <img src="{{asset('storage/'. $product->image)}}" class="border rounded w-100" alt="">
                        <h3>{{$product->price}} P.</h3>
                        <h5>{{$product->name}}</h5>
                        <a href="{{route('add.order.list', ['id' => $product->id])}}" type="button" class="btn btn-success">Добавить</a>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
