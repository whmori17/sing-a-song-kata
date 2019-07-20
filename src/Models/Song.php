<?php

class Song {
    public $verses = [];
    
    public function __construct(){
    }

    public function getLastToward(){
        return $this->verses[sizeof($this->verses)-1];
    }

    public function toString(){
        foreach($this->verses as $verse) {
            echo $verse;
        }
    }
}
