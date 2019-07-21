<?php

$animals = ["fly", "spider", "bird", "cat", "dog", "cow", "horse"];

$song = (new AnimalSongBuilder())->makeSong($animals);

echo $song->toString();
