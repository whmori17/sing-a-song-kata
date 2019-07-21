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
$swallowedSpiderAndCatchFlyVerse = new SwallowedAndCatchAnimalVerse($spider, $fly);
$verses2 = [
    new SwallowedAnimalVerse($spider),
    new Verse("That wriggled and wiggled and tickled inside her.\n" ),
    $swallowedSpiderAndCatchFlyVerse,
    $dontKnowSwallewedAnimalVerse,
];
$strophe2 = new Strophe($verses2);
$song->addStrophe($strophe2);

$bird = "bird";
$swallowedBirdAndCatchSpiderVerse = new SwallowedAndCatchAnimalVerse($bird, $spider);
$verses3 = [
    new SwallowedAnimalVerse($bird),
    new Verse("How absurd to swallow a bird.\n" ),
    $swallowedBirdAndCatchSpiderVerse,
    $swallowedSpiderAndCatchFlyVerse,
    $dontKnowSwallewedAnimalVerse,
];
$strophe3 = new Strophe($verses3);
$song->addStrophe($strophe3);

$cat = "cat";
$swallowedCatAndCatchBirdVerse = new SwallowedAndCatchAnimalVerse($cat, $bird);
$verses4 = [
    new SwallowedAnimalVerse($cat),
    new Verse("Fancy that to swallow a cat!\n" ),
    $swallowedCatAndCatchBirdVerse,
    $swallowedBirdAndCatchSpiderVerse,
    $swallowedSpiderAndCatchFlyVerse,
    $dontKnowSwallewedAnimalVerse,
];
$strophe4 = new Strophe($verses4);
$song->addStrophe($strophe4);

$dog = "dog";
$swallowedDogAndCatchCatAnimalVerse = new SwallowedAndCatchAnimalVerse($dog, $cat);
$verses5 = [
    new SwallowedAnimalVerse($dog),
    new Verse("What a hog, to swallow a dog!\n" ),
    $swallowedDogAndCatchCatAnimalVerse,
    $swallowedCatAndCatchBirdVerse,
    $swallowedBirdAndCatchSpiderVerse,
    $swallowedSpiderAndCatchFlyVerse,
    $dontKnowSwallewedAnimalVerse,
];
$strophe5 = new Strophe($verses5);
$song->addStrophe($strophe5);

$cow = "cow";
$swallowedCowAndCatchDoglVerse = new SwallowedAndCatchAnimalVerse($cow, $dog);
$verses6 = [
    new SwallowedAnimalVerse($cow),
    new Verse("I don't know how she swallowed a cow!\n" ),
    $swallowedCowAndCatchDoglVerse,
    $swallowedDogAndCatchCatAnimalVerse,
    $swallowedCatAndCatchBirdVerse,
    $swallowedBirdAndCatchSpiderVerse,
    $swallowedSpiderAndCatchFlyVerse,
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
