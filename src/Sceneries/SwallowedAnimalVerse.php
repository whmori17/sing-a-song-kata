<?php

class SwallowedAnimalVerse extends Verse
{
    public function __construct(string $swallowedAnimal, $separator = ";")
    {
        $this->content = "There was an old lady who swallowed a {$swallowedAnimal}{$separator}\n";
    }

}
