<?php

namespace Thibaultvanc\ChuckNorrisJokes;

class JokeFactory
{
    public $jokes = [
        'Jesus Christ est né en 1940 avant Chuck Norris.',
        'Quand Google ne trouve pas quelque chose, il demande à Chuck Norris. ',
        'Quand Chuck Norris utilise Windows, il ne plante pas.',
        'huck Norris peut écouter un CD complet de Diam\'s. Ça marche aussi avec Tragédie. ',
        'C´est lorsque Mickael Jackson a croisé Chuck Norris qu\'il est devenu blanc.',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
