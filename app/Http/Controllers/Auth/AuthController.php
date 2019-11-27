<?php


namespace App\Http\Controllers\Auth;

use Socialite;
use App\User;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    
    
    public function redirectToProvider() {
        
        return Socialite::driver('github')->redirect();
    }
    
    public function handleProviderCallBack() {
        
        
        $user = $this->findOrCreateGitHubUser(
        $githubUser = Socialite::driver('github')->user()
        );
        
        auth()->login($user);
        
         //dd($githubUser);
        
        return redirect ('/');
    }
    
    protected function findOrCreateGitHubUser($githubUser){
        
        $user = User::firstOrNew(['github_id' => $githubUser->id]);
        
        //if($user->exists){
          //  return $user;
        //} 
        
        $user->fill([
        
        'name' => $githubUser->nickname,
        'email' => $githubUser->email
        ])->save();
        
        return $user;
    }
}

?>