<?php

namespace App;



use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    
    use Notifiable;
    
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id');
    }
    
    public function hasPost() {
        
        return (bool) $this->posts;
      
    }
    
    public function hasToken() {
        
        return (bool) $this->remember_token;
      
    }
    
    public function noToken() {
    
        return ! $this->hasToken();
      
    }
    
    public function profile() {
        
        return $this->hasOne(Profile::class);
    }
    
    public function experience() {
        
        return $this->hasOne(Experience::class);
    }
    
    public function achievements(){
        
        return $this->hasMany(Achievement::class);
    }
       
}
