<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadsTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic test example.
     *
     *  @test
     */
    public function a_user_can_view_all_threads()
    {
        $thread = factory('App\Thread')->create();
        $response = $this->get('/threads');

        //$response->assertStatus(200);
        $response->assertSee($thread->title);
        $response->assertSee($thread->body);
    }

    /**
     * @test
     */
    public function a_user_can_view_a_single_thread()
    {
        $thread = factory('App\Thread')->create();
        
        $response = $this->get('/threads/' . $thread->id);
        $response->assertSee($thread->title);
    }
}
