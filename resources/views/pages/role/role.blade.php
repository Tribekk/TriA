@extends('welcome')
@section('content')
@foreach($roles as $role)
    <div class="row m-5">
        <div class="col-lg-2">
            <h1>{{$role->name}}</h1>
        </div>
        <div class="col-lg-4">
            <a href="{{route('edit.role', ['role' => $role])}}" type="button" class="btn btn-primary px-3">Изменить</a>
            <a href="{{route('delete.role', ['role' => $role])}}" type="button" class="btn btn-danger ms-2 px-3">Удалить</a>
        </div>
    </div>
@endforeach
<a href="{{route('add.role')}}" type="button" class="btn btn-success px-5 py-3">Добавить</a>
@endsection
