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
        
        $githubUser = Socialite::driver('github')->user();
        
        dd($githubUser);
        
    }
}

?>