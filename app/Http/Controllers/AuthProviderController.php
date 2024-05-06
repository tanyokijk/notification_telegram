<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthProviderController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        $socialiteUser = Socialite::driver('github')->user();

        $user = User::updateOrCreate([
            'github_id' => $socialiteUser->id,

            'name' => $socialiteUser->nickname,
            'email' => $socialiteUser->email,
            'github_token' => $socialiteUser->token,
            'github_refresh_token' => $socialiteUser->refreshToken,
        ]);

        Auth::login($user);
        return redirect('/dashboard');
    }
}
