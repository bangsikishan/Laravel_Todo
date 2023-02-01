<x-layout>
    <div id="login-main">
        <form action="{{ route('auth.login') }}" method="POST" class="login-form">
            <h1>Login</h1>
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required />
            @error('email')<p>{{ $message }}</p>@enderror

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required />
            @error('password')<p>{{ $message }}</p>@enderror

            <button type="submit">Login</button>
        </form>
    </div>
</x-layout>