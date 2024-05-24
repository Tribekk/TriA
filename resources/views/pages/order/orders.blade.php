@extends('welcome')
@section('content')
    @foreach($orders as $order)
        <div class="row mt-3">
            <div class="col-lg-2">
                <h5 class="border-end">{{$order->name}}</h5>
            </div>
            <div class="col-lg-3">
                <h5 class="border-end">{{$order->email}}</h5>
            </div>
            <div class="col-lg-3">
                <h5 class="border-end">{{$order->title}}</h5>
            </div>
            <div class="col-lg-3">
                <a href="{{route('order-order', ['order' => $order->id])}}" type="button"
                   class="btn btn-primary px-3 position-relative">Просмотреть @if($order->isReader == 0)
                        <span
                            class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
    <span class="visually-hidden">Новые уведомления</span>
  </span>
                    @endif</a>
                @if(auth()->user()->can('Удаление заявки'))
                    <a href="" type="button" class="btn btn-danger ms-2 px-3">Удалить</a>
                @endif
            </div>
        </div>
    @endforeach
@endsection
