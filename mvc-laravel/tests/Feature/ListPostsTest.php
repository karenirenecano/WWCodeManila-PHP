<?php

namespace Tests\Feature;

use Tests\TestCase;

class ListsPosts extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testToListAllPostsTest()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
}
