<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
 function it_welcomes_users_with_nickname()
 {
     $this->get('/saludo/Edward/GCM')
     ->assertStatus(200)
     ->assertSee('Bienvenido Edward, tu apodo es GCM');
 }
    /** @test */
 function it_welcomes_users_without_nickname()
 {
     $this->get('/saludo/Edward')
     ->assertStatus(200)
     ->assertSee('Bienvenido Edward');
 }
}
