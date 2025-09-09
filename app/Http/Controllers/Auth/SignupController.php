<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function showForm()
    {
        return view('auth.signup'); // Blade file we'll create next
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|in:buyer,trader',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'role'     => $request->role, // Make sure this column exists in DB
            'password' => Hash::make($request->password),
        ]);

        // If the request expects JSON (API/Flutter)
        if ($request->expectsJson()) {
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json([
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'role' => $user->role,
                ],
                'token' => $token,
                'message' => 'Account created successfully!'
            ], 201);
        }

        // Web response (redirect)
        return redirect()->route('signup.form')->with('success', 'Account created successfully!');
    }
}

