<?php

$song = new Song();

$fly = "fly";
$dontKnowSwallewedAnimalVerse = new DontKnowSwallowedAnimalVerse($fly);
$verses1 = [
    new SwallowedAnimalVerse($fly, "."),
    $dontKnowSwallewedAnimalVerse,
];
$strophe1 = new Strophe($verses1);
$song->addStrophe($strophe1);

$spider = "spider";
$verses2 = [
    new SwallowedAnimalVerse($spider),
    new Verse("That wriggled and wiggled and tickled inside her.\n" ),
    new SwallowedAndCatchAnimalVerse($spider, $fly),
    $dontKnowSwallewedAnimalVerse,
];
$strophe2 = new Strophe($verses2);
$song->addStrophe($strophe2);

$bird = "bird";
$verses3 = [
    new SwallowedAnimalVerse($bird),
    new Verse("How absurd to swallow a bird.\n" ),
    new SwallowedAndCatchAnimalVerse($bird, $spider),
    new SwallowedAndCatchAnimalVerse($spider, $fly),
    $dontKnowSwallewedAnimalVerse,
];
$strophe3 = new Strophe($verses3);
$song->addStrophe($strophe3);

$cat = "cat";
$verses4 = [
    new SwallowedAnimalVerse($cat),
    new Verse("Fancy that to swallow a cat!\n" ),
    new SwallowedAndCatchAnimalVerse($cat, $bird),
    new SwallowedAndCatchAnimalVerse($bird, $spider),
    new SwallowedAndCatchAnimalVerse($spider, $fly),
    $dontKnowSwallewedAnimalVerse,
];
$strophe4 = new Strophe($verses4);
$song->addStrophe($strophe4);

$dog = "dog";
$verses5 = [
    new SwallowedAnimalVerse($dog),
    new Verse("What a hog, to swallow a dog!\n" ),
    new SwallowedAndCatchAnimalVerse($dog, $cat),
    new SwallowedAndCatchAnimalVerse($cat, $bird),
    new SwallowedAndCatchAnimalVerse($bird, $spider),
    new SwallowedAndCatchAnimalVerse($spider, $fly),
    $dontKnowSwallewedAnimalVerse,
];
$strophe5 = new Strophe($verses5);
$song->addStrophe($strophe5);

$cow = "cow";
$verses6 = [
    new SwallowedAnimalVerse($cow),
    new Verse("I don't know how she swallowed a cow!\n" ),
    new SwallowedAndCatchAnimalVerse($cow, $dog),
    new SwallowedAndCatchAnimalVerse($dog, $cat),
    new SwallowedAndCatchAnimalVerse($cat, $bird),
    new SwallowedAndCatchAnimalVerse($bird, $spider),
    new SwallowedAndCatchAnimalVerse($spider, $fly),
    $dontKnowSwallewedAnimalVerse,
];
$strophe6 = new Strophe($verses6);
$song->addStrophe($strophe6);

$horse = "horse";
$verses7 = [
    new SwallowedAnimalVerse($horse, "..." ),
    new Verse("...She's dead, of course!"),
];
$strophe7 = new Strophe($verses7);
$song->addStrophe($strophe7);

echo $song->toString();
