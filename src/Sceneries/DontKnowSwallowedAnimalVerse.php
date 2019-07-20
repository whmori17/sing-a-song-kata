<?php

class DontKnowSwallowedAnimalVerse extends Verse
{
    public function __construct(string $swallowedAnimal)
    {
        $this->content = "I don't know why she swallowed a $swallowedAnimal - perhaps she'll die!\n\n";
    }

}
