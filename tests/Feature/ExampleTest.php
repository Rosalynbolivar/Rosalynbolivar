<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

<<<<<<< HEAD
        $response->assertStatus(200);
=======
        $response->assertOk();
>>>>>>> e853b1b31568c777472d5e1ab893dc957ed98291
    }
}
