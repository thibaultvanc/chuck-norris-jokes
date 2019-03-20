<?php

namespace Thibaultvanc\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Thibaultvanc\ChuckNorrisJokes\JokeFactory;

/**
 *
 *
 *    ./vendor/bin/phpunit tests/JokeFactoryTest.php
 *
 *
 *
 */



class JokeFactoryTest extends Testcase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);
        $joke = $jokes->getRandomJoke();
        
        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $jokes->jokes);
    }
}
