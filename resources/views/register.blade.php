<x-layout>
    <div id="register-main">
        <form action="{{ route('auth.register') }}" method="POST" class="register-form">
            <h1>Register</h1>
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Name" required />
            @error('name')<p>{{ $message }}</p>@enderror

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required />
            @error('email')<p>{{ $message }}</p>@enderror

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required />
            @error('password')<p>{{ $message }}</p>@enderror

            <label for="password">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" required />
            @error('password_confirmation')<p>{{ $message }}</p>@enderror

            <button type="submit">Register</button>
        </form>
    </div>
</x-layout>