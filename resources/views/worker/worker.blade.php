@extends('welcome')
@section('content')
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex" role="search" method="GET">
        <input type="search" class="form-control m-3"
               @isset($_GET['search_field']) value="{{$_GET['search_field']}}"
               @endisset placeholder="Найти пользователя" aria-label="Search" name="search_field">
        <button type="submit" class="btn btn-outline-light text-bg-dark m-3">Найти</button>
    </form>
    @foreach($workers as $worker)
        <div class="row m-5">
            <div class="col-lg-4">
                <p>{{$worker->firstname}} {{$worker->name}} {{$worker->otchestvo}} {{$worker->getRoleNames()[0]}}</p>
                <p>{{$worker->email}}</p>
            </div>
            <div class="col-lg-4">
                @if(auth()->user()->can('Обновление продукции'))
                    <a href="{{route('edit.worker', ['worker'=>$worker->id])}}" type="button"
                       class="btn btn-primary px-3">Изменить</a>
                @endif
                @if(auth()->user()->can('Обновление продукции'))
                    <a href="{{route('delete.worker', ['user'=>$worker->id])}}" type="button"
                       class="btn btn-danger ms-2 px-3">Удалить</a>
                @endif
            </div>
        </div>
    @endforeach
@endsection
