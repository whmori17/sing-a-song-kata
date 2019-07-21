<?php

class SwallowedAndCatchAnimalVerse extends Verse
{
    /**
     * SwallowedAndCatchAnimalVerse constructor.
     * @param string $swallowedAnimal
     * @param string $animalToCatch
     */
    public function __construct(string $swallowedAnimal, string $animalToCatch)
    {
        $this->content = "She swallowed the $swallowedAnimal to catch the $animalToCatch;\n";
    }

}
