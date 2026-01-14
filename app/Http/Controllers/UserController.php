<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

   



public function login()
{
    return view('user.login');
}


public function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);


    if (Auth::attempt($credentials, $request->filled('remember'))) {
        $request->session()->regenerate();

       
        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role === 'host') {
            return redirect()->route('owner.dashboard');
        } else {
            return redirect()->route('home');
        }
    }

   
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
}

//    use Illuminate\Http\Request;


public function register(Request $request)
{
   
    if ($request->isMethod('get')) {
        return view('user.register');
    }

 
    $validated = $request->validate([
        'firstName' => ['required', 'string', 'max:255'],
        'lastName' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
        'phone' => ['nullable', 'string', 'max:20'],
        'role' => ['required', Rule::in(['user', 'host'])],
        'password' => ['required', 'confirmed', 'min:8'],
    ]);

    $user = \App\Models\User::create([
        'name' => $validated['firstName'] . ' ' . $validated['lastName'],
        'email' => $validated['email'],
        'phone' => $validated['phone'] ?? null,
        'role' => $validated['role'],
        'is_active' => true,
        'avatar_url' => null,
        'bio' => null,
        'password' => Hash::make($validated['password']),
    ]);

    auth()->login($user);

   
    if ($user->role === 'user') {
        return redirect()->route('login')->with('success', 'تم إنشاء حسابك بنجاح!');
    } elseif ($user->role === 'host') {
        return redirect()->route('login')->with('success', 'تم إنشاء حسابك كمالك نشاط بنجاح!');
    }

    return redirect()->route('home');
}

    public function profile()
    {
        return view('user.profile');
    }

    public function activities()
    {
        return view('user.activities');
    }

    public function activity_details()
    {
        return view('user.activity_details');
    }

    public function bookings()
    {
        return view('user.bookings');
    }
}
