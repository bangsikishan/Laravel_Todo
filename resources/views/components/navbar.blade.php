<div id="navbar">
    <div>
        <h1>
            <a href="{{ route('todo.index') }}">Todo</a>
        </h1>
    </div>
    <div id="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div id="links" class="">
        <ul>
            @auth
                <li>Welcome, {{ auth()->user()->name }}</li>
                <li><a href="{{ route('todo.index') }}">Home</a></li>
                <form action="{{ route('auth.logout') }}" method="POST" class="logout">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </div>
</div>