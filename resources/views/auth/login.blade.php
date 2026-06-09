@extends('layouts.app')

@section('content')
    <h1>Логин</h1>

    @if(session('error'))
        <div>
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

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

        <button type="submit">
            Логин
        </button>
    </form>

    <p>
        Нет аккаунта?
        <a href="{{ route('register.form') }}">Регистрация</a>
    </p>
@endsection
