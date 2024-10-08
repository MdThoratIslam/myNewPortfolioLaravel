<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('backend.auth.login');
    }
    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->authenticate();
                $request->session()->regenerate();

                $notification = [
                    'message'       => 'Successfully logged in',
                    'alert-type'    => 'success'
                ];
                Log::info('User logged in successfully: ' . Auth::user()->email);
                return redirect()->intended(RouteServiceProvider::HOME)->with($notification);
            } else {
                $notification = [
                    'message' => 'Invalid email or password.',
                    'alert-type' => 'error'
                ];
                Log::error('Invalid login attempt: ' . $request->email);
                return redirect()->back()->with($notification);
            }
        } catch (\Illuminate\Database\QueryException $e) {
            $notification = [
                'message' => 'A database error occurred. Please try again later!<br>'. $e->getMessage(),
                'alert-type' => 'error'
            ];
            Log::error('Database query error during login attempt: ' . $e->getMessage());
            return redirect()->back()->with($notification);
        } catch (\Exception $e) {
            Log::error('An unexpected error occurred during login attempt: ' . $e->getMessage());
            $notification = [
                'message' => 'An unexpected error occurred. Please try again later!<br>'. $e->getMessage(),
                'alert-type' => 'error'
            ];

            return redirect()->back()->with($notification);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Log::info('User logged out successfully');
        return redirect('/');
    }
}
