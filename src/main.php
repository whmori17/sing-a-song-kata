<?php

$song = new Song();

$verses1 = [
    new Verse("There was an old lady who swallowed a fly.\n"),
    new Verse("I don't know why she swallowed a fly - perhaps she'll die!\n\n"),
];
$strophe1 = new Strophe($verses1);
$song->addStrophe($strophe1);

$spider = "spider";
$fly = "fly";
$verses2 = [
    new Verse("There was an old lady who swallowed a spider;\n" ),
    new Verse("That wriggled and wiggled and tickled inside her.\n" ),
    new SwallewdAndCatchAnimalVerse($spider, $fly),
    new Verse("I don't know why she swallowed a fly - perhaps she'll die!\n\n" ),
];
$strophe2 = new Strophe($verses2);
$song->addStrophe($strophe2);

$bird = "bird";
$verses3 = [
    new Verse("There was an old lady who swallowed a bird;\n" ),
    new Verse("How absurd to swallow a bird.\n" ),
    new SwallewdAndCatchAnimalVerse($bird, $spider),
    new SwallewdAndCatchAnimalVerse($spider, $fly),
    new Verse("I don't know why she swallowed a fly - perhaps she'll die!\n\n" ),
];
$strophe3 = new Strophe($verses3);
$song->addStrophe($strophe3);

$cat = "cat";
$verses4 = [
    new Verse("There was an old lady who swallowed a cat;\n" ),
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
    new Verse("There was an old lady who swallowed a dog;\n" ),
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
    new Verse("There was an old lady who swallowed a cow;\n" ),
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

$verses7 = [
    new Verse("There was an old lady who swallowed a horse...\n" ),
    new Verse("...She's dead, of course!"),
];
$strophe7 = new Strophe($verses7);
$song->addStrophe($strophe7);

echo $song->toString();
