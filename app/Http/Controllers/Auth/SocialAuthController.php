<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Socialite;

use App\User;

use Auth;

use App\Mail\Welcome;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

class SocialAuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['role:user',['except']=>['findOrCreateUser']]);
    // }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $SocialUser = Socialite::driver($provider)->user();
        // dd($SocialUser);
  //       // $user->token;
		$user = $this -> findOrCreateUser($SocialUser,$provider);

		auth()->login($user,true);


		return redirect('/');
         
    }

    protected function findOrCreateUser($SocialUser,$provider)
    {
        $user = User::firstOrNew(['provider_id' => $SocialUser->id]);
        
            if ($user->exists) return $user;
    	$user->fill([
        'name' => str_slug($SocialUser->nickname?:$SocialUser->name),
    		'email' => $SocialUser->email,
    		'avatar' => $SocialUser->avatar,
    		'profile' => Hash::make('no pic'),
    		'password' => Hash::make('no need for password token based'),
            'email_notifications' => 1
    	])->save();
        $user->assignRole('user');
        \Mail::to($user)->send(new Welcome($user));
        session()->flash('message','Welcome to '.config('app.name').' '.$user->name);
    	return $user;
    }
}