<?php

class SwallewdAndCatchAnimalVerse extends Verse
{
    public function __construct(string $swalledAnimal, string $animalToCatch)
    {
        $this->content = "She swallowed the $swalledAnimal to catch the $animalToCatch;\n";
    }

}
