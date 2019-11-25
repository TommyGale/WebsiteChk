<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    
    use RefreshDatabase;
    
    /** @test */
   
   public function a_guest_cannot_create_a_post()
   {
       
       //this->withoutExceptionHandling();
       
       $this->post('/posts')->assertRedirect('/login');
       
       
   }
   
    
    /** @test */
   
   public function a_user_can_create_a_post()
   {
       
       //$this->withoutExceptionHandling();
       
       $this->actingAs(factory('App\User')->create());
       
       $attributes = ['topic' => 'One Test', 
       'summary' => 'This is a post for a test.'];
       
       $this->post('/posts',$attributes);
       
       $this->assertDatabaseHas('posts', $attributes);
       
   }
   
}
