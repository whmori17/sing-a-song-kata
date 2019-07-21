<?php

class DontKnowSwallowedAnimalVerse extends Verse
{
    /**
     * DontKnowSwallowedAnimalVerse constructor.
     * @param string $swallowedAnimal
     */
    public function __construct(string $swallowedAnimal)
    {
        $this->content = "I don't know why she swallowed a $swallowedAnimal - perhaps she'll die!\n\n";
    }

}
