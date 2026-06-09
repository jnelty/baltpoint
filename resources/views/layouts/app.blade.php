<!DOCTYPE html>
<html>
<head>
    <title>Baltpoint</title>
</head>
<body>

<header>
    @auth
        <div>
            Авторизация как:
            <strong>{{ Auth::user()->name }}</strong>
            ({{ Auth::user()->email }})
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Выход</button>
        </form>
    @endauth

    @guest
        <a href="{{ route('login.form') }}">Логин</a>
        |
        <a href="{{ route('register.form') }}">Регистрация</a>
    @endguest
</header>

<hr>

@yield('content')

</body>
</html>
