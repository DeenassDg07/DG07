{{-- resources/views/dashboard.blade.php --}}
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .navbar {
            background: #667eea;
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            font-size: 1.5rem;
        }

        .logout-btn {
            background: white;
            color: #667eea;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 600;
            transition: background 0.3s;
        }

        .logout-btn:hover {
            background: #f0f0f0;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .welcome-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .welcome-card h2 {
            color: #333;
            margin-bottom: 1rem;
        }

        .welcome-card p {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <h1>Мой сайт</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-btn">Выйти</button>
    </form>
</nav>

<div class="container">
    <div class="welcome-card">
        <h2>Добро пожаловать, {{ auth()->user()->login }}!</h2>
        <p>Вы успешно вошли в систему. Это ваша личная страница.</p>
    </div>
</div>
</body>
</html>
