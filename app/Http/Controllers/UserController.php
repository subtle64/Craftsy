<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        } else {
            return back()->withErrors([
                'password' => 'Credentials do not match our system.'
            ])->onlyInput('email');
        }
    }

    public function create(Request $request)
    {
        $validated_data = $request->validate([
            'email' => 'required|unique:users|email',
            'name' => 'required',
            'password' => 'required|min:5|Max:255|confirmed',
            'address' => 'required',
        ]);

        $new_user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($new_user, $request->remember);

        return redirect('home')->with('info', 'register_success');
    }
    
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }
}