<div>
    <form method="POST">
        @csrf
        <div class="mb-3 mt-5">
            <label for="exampleFormControlInput1" class="form-label">Ваше имя(Обязательное поле)</label>
            <input type="text" class="form-control" value="@if(auth()->user()){{auth()->user()->name}}@endif" name="name" id="exampleFormControlInput1" placeholder="Иван">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Адрес электронной почты(Обязательное поле)</label>
            <input type="email" class="form-control" @if(isset(auth()->user()->email))value="{{auth()->user()->email}}" @endif  name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Тема</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="">
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1"  class="form-label">Сообщение</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="8"></textarea>
        </div>
        <button type="submit" class="btn btn-warning">Отпавить</button>
    </form>
</div>
