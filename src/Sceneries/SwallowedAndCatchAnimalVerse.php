<?php

class SwallowedAndCatchAnimalVerse extends Verse
{
    public function __construct(string $swallowedAnimal, string $animalToCatch)
    {
        $this->content = "She swallowed the $swallowedAnimal to catch the $animalToCatch;\n";
    }

}
