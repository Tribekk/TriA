@extends('welcome')
@section('content')
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex" role="search" method="GET">
        <input type="search" class="form-control m-3 p-2"
               @isset($_GET['search_field']) value="{{$_GET['search_field']}}"
               @endisset placeholder="Найти продукт" aria-label="Search" name="search_field">
        <button type="submit" class="btn btn-outline-light text-bg-dark m-3">Найти</button>
    </form>
    <table class="border text-center">
        <div class="d-flex">
            <tr class="border">
                <th style="width: 30%" class="border"><h5>Название</h5></th>
                <th class="border"><h5>Категория</h5></th>
                <th class="border"><h5>Измерение</h5></th>
                <th class="border"><h5>Цена товара</h5></th>
                <th class="border"><h5>В корзину</h5></th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td class="border p-3">
                        <div>
                            <h5>{{$product->name}}</h5>
                        </div>
                    </td>
                    <td class="border">
                        <div>
                            <h5>{{$product->category->name}}</h5>
                        </div>
                    </td>
                    <td class="border p-3">
                        <div>
                            <h5>{{$product->measurement}}</h5>
                        </div>
                    </td>
                    <td class="border">
                        <div>
                            <h5>{{$product->price}} руб.</h5>
                        </div>
                    </td>
                    <td class="border">
                        <div>
                            <a href="{{route('add.order.list', ['id'=>$product->id])}}"
                               class="btn btn-success">Добавить</a>
                        </div>
                    </td>
                </tr>
    @endforeach
@endsection
