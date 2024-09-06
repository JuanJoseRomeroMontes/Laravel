<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

define("ID", 1001);

class ExampleTest extends TestCase
{
    public function testStore(): void
    {
        $data = [
            'id' => ID,
            'type' => 'surf',
            'notes' => 'Test notes'
        ];

        $response = $this->postJson('/activities', $data);

        $response->assertStatus(200);
    }

    public function testIndex(): void
    {
        $response = $this->get('/activities');

        $response->assertStatus(200);
    }

    public function testShow(): void
    {
        $response = $this->get('/activities/id='.ID);

        $response->assertStatus(200);
    }

    public function testUpdate(): void
    {
        $data = [
            'id' => ID,
            'type' => 'windsurf',
            'notes' => 'Test notes'
        ];

        $response = $this->put('/activities');

        $response->assertStatus(200);
    }

    public function testDestroy(): void
    {
        $response = $this->delete('/activities/id='.ID);

        $response->assertStatus(200);
    }
}
