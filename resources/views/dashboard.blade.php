{{-- resources/views/dashboard.blade.php --}}
@extends('layout')
@section('title', 'Личный кабинет')

@section('content')
    <div class="container">
        <div class="welcome-card">
            <h2>Добро пожаловать, {{ auth()->user()->login }}!</h2>
            <p>Вы успешно вошли в систему. Это ваша личная страница.</p>
        </div>
    </div>

    <div class="container">


    </div>
@endsection
