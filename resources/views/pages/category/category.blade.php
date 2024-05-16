@extends('welcome')
@section('content')
    @foreach($categories as $category)
        <div class="row m-5">
            <div class="col-lg-4">
                <h1>{{$category->name}}</h1>
            </div>
            <div class="col-lg-4">
                <a href="{{route('edit.category', ['category' => $category])}}" type="button" class="btn btn-primary px-3">Изменить</a>
                <a href="{{route('delete.category', ['category' => $category])}}" type="button" class="btn btn-danger ms-2 px-3">Удалить</a>
            </div>
        </div>
    @endforeach
    <a href="{{route('add.category')}}" type="button" class="btn btn-success px-5 py-3">Добавить</a>
@endsection
