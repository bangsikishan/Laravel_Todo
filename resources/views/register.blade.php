<x-layout>
    <div id="register-main">
        <form action="{{ route('auth.register') }}" method="POST" class="register-form">
            <h1>Register</h1>
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Name" required />
                @error('name')<p class="error">{{ $message }}</p>@enderror
            </div>
            
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
            
            <div>
                <label for="password">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm password" required />
                @error('password_confirmation')<p class="error">{{ $message }}</p>@enderror
            </div>
            
            <button type="submit">Register</button>
        </form>
    </div>
</x-layout>