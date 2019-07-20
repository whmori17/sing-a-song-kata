<?php

class SwallewdAnimalVerse extends Verse
{
    public function __construct(string $swalledAnimal, $separator = ";")
    {
        $this->content = "There was an old lady who swallowed a {$swalledAnimal}{$separator}\n";
    }

}
