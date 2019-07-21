<?php

class AnimalSongBuilder
{
    /**
     * @var Song
     */
    private $song;

    /**
     * @var array
     */
    private CONST VERSES_IN_THE_MIDDLE = [
        "That wriggled and wiggled and tickled inside her.\n",
        "How absurd to swallow a %s.\n",
        "Fancy that to swallow a %s!\n",
        "What a hog, to swallow a %s!\n",
        "I don't know how she swallowed a %s!\n",
    ];

    /**
     * @var array
     */
    private $alreadyAddedAnimalsVerses = [];

    /**
     * @param array $animals
     * @return Song
     */
    public function makeSong(array $animals): Song
    {
        $dontKnowSwallewedAnimalVerse = new DontKnowSwallowedAnimalVerse($animals[0]);

        $this->song = new Song();

        $this->addFirstStropheToSong($animals, $dontKnowSwallewedAnimalVerse);

        $this->addStrophesInTheMiddle($animals, $dontKnowSwallewedAnimalVerse);

        $this->addFinalStrophe($animals);

        return $this->song;
    }

    /**
     * @param string $animal1
     * @param string $animal2
     * @param Strophe $strophe
     * @return Strophe
     */
    private function addAnimalsVerseToStrophe(string $animal1, string $animal2, Strophe $strophe): Strophe
    {
        $verse = new SwallowedAndCatchAnimalVerse($animal1, $animal2);
        $strophe->addVerse($verse);

        foreach ($this->alreadyAddedAnimalsVerses as $addedAnimalsStrophe) {
            $strophe->addVerse($addedAnimalsStrophe);
        }

        $this->alreadyAddedAnimalsVerses[] = $verse;

        return $strophe;
    }

    /**
     * @param array $verses
     */
    private function addAndCreateStropheWithVerses(array $verses): void
    {
        $this->song->addStrophe(new Strophe($verses));
    }

    /**
     * @param array $animals
     * @param DontKnowSwallowedAnimalVerse $dontKnowSwallewedAnimalVerse
     */
    protected function addFirstStropheToSong(array $animals, DontKnowSwallowedAnimalVerse $dontKnowSwallewedAnimalVerse): void
    {
        $this->addAndCreateStropheWithVerses([
            new SwallowedAnimalVerse($animals[0], "."),
            $dontKnowSwallewedAnimalVerse
        ]);
    }

    /**
     * @param array $animals
     * @param DontKnowSwallowedAnimalVerse $dontKnowSwallewedAnimalVerse
     */
    protected function addStrophesInTheMiddle(array $animals, DontKnowSwallowedAnimalVerse $dontKnowSwallewedAnimalVerse): void
    {
        for ($i = 1; $i < sizeof($animals) - 2; $i++) {
            $strophe = new Strophe();

            $strophe->addVerse(new Verse(sprintf(self::VERSES_IN_THE_MIDDLE[$i], $animals[$i])));
            $strophe = $this->addAnimalsVerseToStrophe($animals[$i], $animals[$i - 1], $strophe);
            $strophe->addVerse($dontKnowSwallewedAnimalVerse);

            $this->song->addStrophe($strophe);
        }
    }

    /**
     * @param array $animals
     */
    protected function addFinalStrophe(array $animals): void
    {
        $verseSemiFinal = new SwallowedAnimalVerse($animals[sizeof($animals) - 1], "...");
        $finalVerse = new Verse("...She's dead, of course!");

        $this->addAndCreateStropheWithVerses([
                $verseSemiFinal,
                $finalVerse,
            ]
        );
    }

}
