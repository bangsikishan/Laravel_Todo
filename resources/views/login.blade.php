<x-layout>
    <div id="login-main">
        <form action="{{ route('auth.login') }}" method="POST" class="login-form">
            <h1>Login</h1>
            @csrf
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required />
                @error('email')<p class="error">{{ $message }}</p>@enderror
            </div>
            
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required />
                @error('password')<p class="error">{{ $message }}</p>@enderror
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</x-layout>