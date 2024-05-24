@extends('welcome')
@section('content')
    @if (session('success'))
    <div class="alert alert-success toast-container position-fixed bottom-0 start-0 p-3" role="alert">
        {{ session('success') }}
    </div>
@endif
    @if($orders->count()>0)
        <table class="border text-center">
            <div class="d-flex">
                <tr class="border">
                    <th style="width: 30%" class="border"><h5>Название</h5></th>
                    <th class="border"><h5>Категория</h5></th>
                    <th class="border"><h5>Цена товара</h5></th>
                    <th class="border"><h5>Количесвто</h5></th>
                    <th class="border"><h5>Итого</h5></th>
                    <th class="border"><h5>Удалить</h5></th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td class="border p-3">
                            <div>
                                <h5>{{$order->products->name}}</h5>
                            </div>
                        </td>
                        <td class="border">
                            <div>
                                <h5>{{$order->products->category->name}}</h5>
                            </div>
                        </td>
                        <td class="border">
                            <div>
                                <h5>{{$order->products->price}}</h5>
                            </div>
                        </td>
                        <td class="border">
                            <div class="d-flex align-items-center justify-content-center">
                                <a href="{{route('minus.id', ['id'=>$order->products->id])}}" type="button"
                                   class="btn btn-danger me-2"
                                   style="height: 40px; width: 40px">-</a>
                                <h5>{{$order->colvo}} {{$order->products->measurement}}</h5> <a
                                    href="{{route('plus.id', ['id' => $order->products->id])}}" type="button"
                                    class="btn btn-success ms-2" style="height: 40px; width: 40px">+</a>
                            </div>
                        </td>
                        <td class="border">
                            <div>
                                <h5>{{($order->products->price) * ($order->colvo)}} руб.</h5>
                            </div>
                        </td>
                        <td class="border">
                            <div>
                                <a href="{{route('cart.delete', ['id'=>$order->id])}}" type="button"
                                   class="btn btn-danger me-2">Убрать</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </div>
        </table>
        <div class="d-flex justify-content-between mt-5">
            <h5>И того: {{$sum}}</h5>
            <form action="" method="post" class="border border p-5">
                @csrf
                <h5>Введите эл.почту и мы с вами свяжемся</h5>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Адрес электронной почты(Обязательное поле)</label>
                    <input type="email" class="form-control" @if(isset(auth()->user()->email))value="{{auth()->user()->email}}" @endif  name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Оформить заявку</button>
            </form>
        </div>
    @else
        <h1>Корзина пуста</h1>
    @endif

@endsection
