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

    /**
     * @return string
     */
    public function toString(): string
    {
        $songStringed = '';

        foreach($this->strophes as $strophe) {
            $songStringed .= $strophe->getContent();
        }

        return $songStringed;
    }

    /**
     * @param Strophe $strophe
     */
    public function addStrophe(Strophe $strophe): void
    {
        $this->strophes[] = $strophe;
    }
}
