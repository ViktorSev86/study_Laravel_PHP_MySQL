@extends('layouts.app')

@section('title-block')
    Контакты
@endsection

@section('content')
    <h1>Страница контактов</h1>

    <form action="{{route('contact-form')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Введите email</label>
            <input type="text" name="email" placeholder="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Введите сообщение</label>
            <textarea name="message" placeholder="Сообщение" id="message" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection