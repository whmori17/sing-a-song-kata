<?php

class SwallowedAnimalVerse extends Verse
{
    /**
     * SwallowedAnimalVerse constructor.
     * @param string $swallowedAnimal
     * @param string $separator
     */
    public function __construct(string $swallowedAnimal, $separator = ";")
    {
        $this->content = "There was an old lady who swallowed a {$swallowedAnimal}{$separator}\n";
    }

}
