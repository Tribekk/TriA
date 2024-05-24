@extends('welcome')
@section('content')
    <form method="post">
        @csrf
        <div class="form-floating mt-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$role->name}}" name="name" id="floatingName" placeholder="Имя" required>
            <label for="floatingName" style="color: black">Название роли</label>
        </div>
        @error('name')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
        <div class="mt-5">
            <h5>Права для роли</h5>
            @foreach($permissions as $permission)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" @if($role->hasPermissionTo($permission->name)) checked @endif name="permissions[]" value="{{$permission->id}}" id="flexCheck{{$permission->id}}">
                    <label class="form-check-label" for="flexCheck{{$permission->id}}">
                        {{$permission->name}}
                    </label>
                </div>
            @endforeach
        </div>
        @error('permissions')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-success mt-5 py-3 w-100">Изменить</button>
    </form>
@endsection
