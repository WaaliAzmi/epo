<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form for web.
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Web login form
    }

    /**
     * Handle login for both web and API.
     */
    public function login(Request $request)
    {
        // Validate credentials
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Check if request expects JSON (for API)
        if ($request->expectsJson()) {
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json([
                    'user' => [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'role' => $user->role,
                    ],
                    'token' => $token,
                ], 200);
            }

            return response()->json([
                'message' => 'The credentials do not match our records.',
            ], 401);
        }

        // Web authentication
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirect based on role
            if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            return redirect()->route('welcome.view');
        }

        return back()->withErrors([
            'email' => 'The credentials do not match our records.',
        ]);
    }

    /**
     * Handle logout for both web and API.
     */
    public function logout(Request $request)
    {
        // API logout
        if ($request->expectsJson()) {
            $request->user()->currentAccessToken()->delete();
            return response()->json(['message' => 'Successfully logged out'], 200);
        }

        // Web logout
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.form');
    }
}