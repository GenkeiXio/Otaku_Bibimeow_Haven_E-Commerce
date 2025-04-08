<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;
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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function credentials(Request $request){
        return ['email'=>$request->email,'password'=>$request->password,'status'=>'active','role'=>'admin'];
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirect($provider)
    {
        // dd($provider);
     return Socialite::driver($provider)->redirect();
    }
 
    public function Callback($provider)
{
    $userSocial = Socialite::driver($provider)->stateless()->user();
    $existingUser = User::where('email', $userSocial->getEmail())->first();

    if ($existingUser) {
        Auth::login($existingUser);
        return redirect('/')->with('success', 'You are logged in using ' . ucfirst($provider));
    } else {
        // Store the user data in session and redirect to registration page
        session([
            'social_user' => [
                'name' => $userSocial->getName(),
                'email' => $userSocial->getEmail(),
                'provider_id' => $userSocial->getId(),
                'provider' => $provider,
                'avatar' => $userSocial->getAvatar(),
            ]
        ]);
        return redirect()->route('register.form');
    }
}

public function handleGoogleCallback()
{
    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::where('email', $googleUser->getEmail())->first();

    if (!$user) {
        $user = User::create([
            'name' => $googleUser->getName(),
            'email' => $googleUser->getEmail(),
            'google_id' => $googleUser->getId(),
            'password' => bcrypt('123456dummy'),
            'role' => 'user', // <- add this
            'status' => 'active', // <- add this
        ]);
    } elseif (!$user->role || !$user->status) {
        // In case user exists but role or status is missing
        $user->update([
            'role' => $user->role ?? 'user',
            'status' => $user->status ?? 'active',
        ]);
    }

    Auth::login($user);

    return redirect('/')->with('success', 'You are logged in with Google');
}

}
