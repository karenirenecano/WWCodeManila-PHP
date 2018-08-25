<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Unit\Adapters\PhpunitTest;

class LessonControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBindLessonToIndexView()
    {
        $result = $this->call('GET', '/lessons');

        $this->assertEquals('hello!:)', $result->getContent());
    }
}
