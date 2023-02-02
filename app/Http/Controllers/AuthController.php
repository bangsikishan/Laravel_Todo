<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginStoreRequest;
use App\Http\Requests\RegisterStoreRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function login(LoginStoreRequest $request)
    {
        $loginDetails = $request->validated();
        
        if (Auth::attempt($loginDetails)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()
            ->withFail('Invalid Credentials!')
            ->onlyInput('email');
    }

    public function register(RegisterStoreRequest $request)
    {
        $registerDetails = $request->validated();

        User::create($registerDetails);

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
