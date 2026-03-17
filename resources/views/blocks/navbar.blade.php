<nav class="navbar">
    <h1>Мой сайт</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-btn">Выйти</button>
    </form>
</nav>
