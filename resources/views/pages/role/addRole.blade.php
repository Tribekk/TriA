@extends('welcome')
@section('content')
    <form method="post">
        @csrf
        <div class="form-floating mt-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" id="floatingName" placeholder="Имя" required>
            <label for="floatingName" style="color: black">Название роли</label>
        </div>
        @error('name')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-success mt-5 py-3 w-100">Добавить</button>
    </form>
@endsection
