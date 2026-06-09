@extends('layouts.app')

@section('content')
    <h1>Регистрация</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Имя</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required
            >

            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">Пароль</label>
            <input
                type="password"
                id="password"
                name="password"
                required
            >

            @error('password')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">
                Подтвердить пароль
            </label>

            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                required
            >
        </div>

        <button type="submit">
            Регистрация
        </button>
    </form>

    <p>
        Уже зарегистрированы?
        <a href="{{ route('login.form') }}">Логин</a>
    </p>
@endsection
