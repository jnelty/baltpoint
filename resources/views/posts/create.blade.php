@extends('layouts.app')

@section('content')
    <h1>Создать пост</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if($errors->has('errors'))
        <div style="color:red;">
            {{ $errors->first('errors') }}
        </div>
    @endif

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <div>
            <label for="title">Заголовок</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="content">Содержание</label>
            <textarea id="content" name="content" required>{{ old('content') }}</textarea>
            @error('content')
            <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Создать пост</button>
    </form>
@endsection
