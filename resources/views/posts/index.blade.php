@extends('layouts.app')

@section('content')
    <h1>Посты</h1>

    @if($posts->isEmpty())
        <p>Нет постов.</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <small>By: {{ $post->user->name ?? 'Неизвестный автор' }} ({{ $post->user->email ?? '-' }})</small>
                </li>
            @endforeach
        </ul>
    @endif

    @auth
        <p><a href="{{ route('posts.create') }}">Создать новый пост</a></p>
    @endauth
@endsection
