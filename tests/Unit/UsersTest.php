<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    use RefreshDatabase;
    
   /** @test */
   
   public function a_user_owns_a_post()
   {
        //$this->withoutExceptionHandling();
       
        $user = factory('App\User')->create();
        
        $user->posts()->create(['topic' => 'A new Test',
        'summary' => 'Another test']);
        
        
        
        $this->assertEquals('A new Test', $user->posts[0]->topic);
        
   }
}
