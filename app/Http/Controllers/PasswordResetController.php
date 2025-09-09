<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PasswordResetController extends Controller
{
    public function showForgotForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email|exists:users,email']);

            $token = Str::random(64);

            DB::table('password_resets')->updateOrInsert(
                ['email' => $request->email],
                [
                    'token' => $token,
                    'created_at' => now()
                ]
            );

            $resetLink = url('/reset-password/' . $token);

            Mail::send('emails.reset', ['resetLink' => $resetLink], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Reset Your EPO Password');
            });

            // Check if request expects JSON (API call from Flutter)
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Password reset link has been sent to your email.'
                ], 200);
            }

            // Web request - redirect to login with success message
            return redirect()->route('login.form')->with('status', 'Password reset link has been sent to your email.');

        } catch (\Exception $e) {
            \Log::error('Password reset error: ' . $e->getMessage());
            
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to send reset link. Please try again.'
                ], 500);
            }

            return back()->withErrors(['email' => 'Failed to send reset link. Please try again.']);
        }
    }

    public function showResetForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        try {
            $request->validate([
                'token' => 'required',
                'email' => 'required|email|exists:users,email',
                'password' => 'required|min:6|confirmed',
            ]);

            $reset = DB::table('password_resets')
                ->where('email', $request->email)
                ->where('token', $request->token)
                ->first();

            if (!$reset) {
                if ($request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Invalid token or email.'
                    ], 400);
                }
                return back()->withErrors(['email' => 'Invalid token or email.']);
            }

            User::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);

            DB::table('password_resets')->where('email', $request->email)->delete();

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Password has been successfully reset.'
                ], 200);
            }

            return redirect()->route('login.form')->with('status', 'Password has been successfully reset.');

        } catch (\Exception $e) {
            \Log::error('Password reset error: ' . $e->getMessage());
            
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to reset password. Please try again.'
                ], 500);
            }

            return back()->withErrors(['email' => 'Failed to reset password. Please try again.']);
        }
    }
}
