@extends('welcome')
@section('content')
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex" role="search" method="GET">
        <input type="search" class="form-control m-3"
               @isset($_GET['search_field']) value="{{$_GET['search_field']}}"
               @endisset placeholder="Найти пользователя" aria-label="Search" name="search_field">
        <button type="submit" class="btn btn-outline-light text-bg-dark m-3">Найти</button>
    </form>
    @foreach($clients as $client)
        <div class="row m-5">
            <div class="col-lg-4">
                <p>{{$client->firstname}} {{$client->name}} {{$client->otchestvo}}</p>
                <p>{{$client->email}}</p>
            </div>
            <div class="col-lg-4">
                @if(auth()->user()->can('Изменение клиентов'))
                    <a href="{{route('edit.client', ['client' => $client])}}" type="button"
                       class="btn btn-primary px-3">Изменить</a>
                @endif
                @if(auth()->user()->can('Удаление клиентов'))
                    <a href="{{route('delete.client', ['client' => $client])}}" type="button"
                       class="btn btn-danger ms-2 px-3">Удалить</a>
                @endif
            </div>
        </div>
    @endforeach
@endsection
