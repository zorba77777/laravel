<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/hello');
        $response->assertStatus(200);
        $response->assertSeeText("Hello. You are on the news aggregator web-site.");
        $response = $this->get('/categories');
        $response->assertOk();
        $response = $this->get(route('feedback'));
        $response->assertOk();
        $response = $this->get(route('order'));
        $response->assertOk();
    }
}
