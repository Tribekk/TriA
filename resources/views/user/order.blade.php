@extends('welcome')
@section('content')
    <table>

    </table>
    @foreach($orders as $order)
        <div class="row m-5">
            <div class="col-lg-4">
                <h5>{{$order->products->name}}</h5>
            </div>
            <div class="col-lg-2">
                <h5>{{$order->products->category->name}}</h5>
            </div>
            <div class="col-lg-1 d-flex">
                <a href="{{route('minus.id', ['id'=>$order->products->id])}}" type="button" class="btn btn-danger me-2" style="height: 40px; width: 40px">-</a>  <h5>{{$order->colvo}}</h5> <a href="{{route('plus.id', ['id' => $order->products->id])}}" type="button" class="btn btn-success ms-2" style="height: 40px; width: 40px">+</a>
            </div>
            <div class="col-lg-1">
                <h5>{{$order->products->measurement}}</h5>
            </div>
            <div class="col-lg-2">
                <h5>{{($order->products->price) * ($order->colvo)}} руб.</h5>
            </div>
            <div class="col-lg-1">
                <a href="{{route('cart.delete', ['id'=>$order->id])}}" type="button" class="btn btn-danger me-2 w-100">Убрать</a>
            </div>
        </div>
    @endforeach
    <h5>И того: {{$sum}}</h5>
@endsection
