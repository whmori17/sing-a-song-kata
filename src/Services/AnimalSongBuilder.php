<?php

class AnimalSongBuilder
{
    /**
     * @var Song
     */
    private $song;

    public function makeSong(array $animals)
    {
        $this->song = new Song();

        for ($i = 0; $i < sizeof($animals) - 1; $i++){
            $this->addAnimalsStrophe(
                $animals[$i],
                $i === 0 || $i === (sizeof($animals)-1) ? '' : $animals[$i+1])
            ;
        }
    }

    private function addAnimalsStrophe(string $animal1, string $animal2)
    {

    }

}
