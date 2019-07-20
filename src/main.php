<?php

$song = new Song();

$fly = "fly";
$verses1 = [
    new SwallewdAnimalVerse($fly, "."),
    new Verse("I don't know why she swallowed a fly - perhaps she'll die!\n\n"),
];
$strophe1 = new Strophe($verses1);
$song->addStrophe($strophe1);

$spider = "spider";
$verses2 = [
    new SwallewdAnimalVerse($spider),
    new Verse("That wriggled and wiggled and tickled inside her.\n" ),
    new SwallewdAndCatchAnimalVerse($spider, $fly),
    new Verse("I don't know why she swallowed a fly - perhaps she'll die!\n\n" ),
];
$strophe2 = new Strophe($verses2);
$song->addStrophe($strophe2);

$bird = "bird";
$verses3 = [
    new SwallewdAnimalVerse($bird),
    new Verse("How absurd to swallow a bird.\n" ),
    new SwallewdAndCatchAnimalVerse($bird, $spider),
    new SwallewdAndCatchAnimalVerse($spider, $fly),
    new Verse("I don't know why she swallowed a fly - perhaps she'll die!\n\n" ),
];
$strophe3 = new Strophe($verses3);
$song->addStrophe($strophe3);

$cat = "cat";
$verses4 = [
    new SwallewdAnimalVerse($cat),
    new Verse("Fancy that to swallow a cat!\n" ),
    new SwallewdAndCatchAnimalVerse($cat, $bird),
    new SwallewdAndCatchAnimalVerse($bird, $spider),
    new SwallewdAndCatchAnimalVerse($spider, $fly),
    new Verse("I don't know why she swallowed a fly - perhaps she'll die!\n\n" ),
];
$strophe4 = new Strophe($verses4);
$song->addStrophe($strophe4);

$dog = "dog";
$verses5 = [
    new SwallewdAnimalVerse($dog),
    new Verse("What a hog, to swallow a dog!\n" ),
    new SwallewdAndCatchAnimalVerse($dog, $cat),
    new SwallewdAndCatchAnimalVerse($cat, $bird),
    new SwallewdAndCatchAnimalVerse($bird, $spider),
    new SwallewdAndCatchAnimalVerse($spider, $fly),
    new Verse("I don't know why she swallowed a fly - perhaps she'll die!\n\n" ),
];
$strophe5 = new Strophe($verses5);
$song->addStrophe($strophe5);

$cow = "cow";
$verses6 = [
    new SwallewdAnimalVerse($cow),
    new Verse("I don't know how she swallowed a cow!\n" ),
    new SwallewdAndCatchAnimalVerse($cow, $dog),
    new SwallewdAndCatchAnimalVerse($dog, $cat),
    new SwallewdAndCatchAnimalVerse($cat, $bird),
    new SwallewdAndCatchAnimalVerse($bird, $spider),
    new SwallewdAndCatchAnimalVerse($spider, $fly),
    new Verse("I don't know why she swallowed a fly - perhaps she'll die!\n\n" ),
];
$strophe6 = new Strophe($verses6);
$song->addStrophe($strophe6);

$horse = "horse";
$verses7 = [
    new SwallewdAnimalVerse($horse, "..." ),
    new Verse("...She's dead, of course!"),
];
$strophe7 = new Strophe($verses7);
$song->addStrophe($strophe7);

echo $song->toString();
