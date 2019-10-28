<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use App\User;

use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('discord')
            ->setScopes(['identify', 'email'])
            ->redirect();
    }

    public function handleProviderCallback()
    {
        $discord_user = Socialite::driver('discord')->user();
        $discord_id = $discord_user->id;

        $user = User::where('discord_id', $discord_id)->first();

        if(!$user)
        {
            $user = new User;
            $user->name = $discord_user->name;
            $user->email = $discord_user->email;
            $user->discord_id = $discord_id;
            $user->role_id = 0;
            $user->save();
        }

        Auth::loginUsingId($user->id);

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
