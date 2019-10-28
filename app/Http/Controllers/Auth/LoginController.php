<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function redirectToProvider()
    {
        return Socialite::driver('discord')
            ->setScopes(['identify', 'email', 'guilds'])
            ->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('discord')->user();
        #dd($user);
        #return $user->token;
        $guilds = getGuildsByToken($user->token]);
        dd($guilds);
    }

    public static function getGuildsByToken($token)
    {
        $response = $this->getHttpClient()->get(
            'https://discordapp.com/api/users/@me/guilds', [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}
