<?php

class Song {
    protected $strophes = [];

    public function getLastToward(){
        return $this->strophes[sizeof($this->strophes)-1];
    }

    public function toString(){
        foreach($this->strophes as $strophe) {
            echo $strophe->getContent();
        }
    }

    public function addStrophe(Strophe $strophe) {
        $this->strophes[] = $strophe;
    }
}
