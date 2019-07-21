<?php

class Song {
    /**
     * @var array
     */
    protected $strophes = [];

    /**
     * @return mixed
     */
    public function getLastToward()
    {
        return $this->strophes[sizeof($this->strophes)-1];
    }

    public function toString(): void
    {
        foreach($this->strophes as $strophe) {
            echo $strophe->getContent();
        }
    }

    /**
     * @param Strophe $strophe
     */
    public function addStrophe(Strophe $strophe): void
    {
        $this->strophes[] = $strophe;
    }
}
