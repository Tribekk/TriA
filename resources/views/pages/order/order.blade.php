@extends('welcome')
@section('content')
    @if (session('success'))
        <div class="alert alert-success toast-container position-fixed bottom-0 start-0 p-3" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-3 mt-5">
        <label for="exampleFormControlInput1" class="form-label">Имя</label>
        <input type="text" class="form-control" value="{{$order->name}}" disabled readonly name="name" id="exampleFormControlInput1" placeholder="Иван">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Адрес электронной почты</label>
        <input type="email" class="form-control" value="{{$order->email}}" disabled readonly name="email" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Тема</label>
        <input type="text" class="form-control" value="{{$order->title}}" disabled readonly name="title" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1"  class="form-label">Сообщение</label>
        <textarea class="form-control" name="body" disabled readonly id="exampleFormControlTextarea1" rows="8">{{$order->body}}</textarea>
    </div>
    <hr>
    <form method="post">
        @csrf
        <h1>Ответить пользователю</h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Тема</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1"  class="form-label">Сообщение</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="8">С уважением, {{auth()->user()->name}} {{auth()->user()->otchestvo}}.</textarea>
        </div>
        <button class="btn btn-success my-3 w-100 py-2" type="submit">Ответить</button>
    </form>
@endsection
