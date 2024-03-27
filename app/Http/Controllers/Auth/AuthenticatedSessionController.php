<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('backend.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
//        $request->authenticate();
//        $request->session()->regenerate();
//        return redirect()->intended(RouteServiceProvider::HOME);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            $request->authenticate();
            $request->session()->regenerate();
            $notification = [
                'message' => 'Successfully logged in',
                'alert-type' => 'success'
            ];
            return redirect()->intended(RouteServiceProvider::HOME)->with($notification);
        }
        else
        {
            $notification =[
                'message' => 'Invalid email or password.',
                'alert-type' => 'error'
            ];
            return redirect()->route('login')->with($notification);
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

        return redirect('/');
    }
}
