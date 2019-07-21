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
    private const VERSES_IN_THE_MIDDLE = [
        "That wriggled and wiggled and tickled inside her.\n",
        "How absurd to swallow a %s.\n",
        "Fancy that to swallow a %s!\n",
        "What a hog, to swallow a %s!\n",
        "I don't know how she swallowed a %s!\n",
    ];

    /**
     * @var string
     */
    private const SHE_S_DEAD_OF_COURSE = "...She's dead, of course!";

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

        $this->addFirstStropheToSong($animals[0], $dontKnowSwallewedAnimalVerse);

        $this->addStrophesInTheMiddle($animals, $dontKnowSwallewedAnimalVerse);

        $this->addFinalStrophe($animals[sizeof($animals) - 1]);

        return $this->song;
    }

    /**
     * @param string $currentAnimal
     * @param string $previousAnimal
     * @param Strophe $strophe
     * @return Strophe
     */
    private function addAnimalsVerseToStrophe(string $currentAnimal, string $previousAnimal, Strophe $strophe): Strophe
    {
        $verse = new SwallowedAndCatchAnimalVerse($currentAnimal, $previousAnimal);
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
     * @param string $firstAnimal
     * @param DontKnowSwallowedAnimalVerse $dontKnowSwallewedAnimalVerse
     */
    private function addFirstStropheToSong(string $firstAnimal, DontKnowSwallowedAnimalVerse $dontKnowSwallewedAnimalVerse): void
    {
        $this->addAndCreateStropheWithVerses([
            new SwallowedAnimalVerse($firstAnimal, "."),
            $dontKnowSwallewedAnimalVerse,
        ]);
    }

    /**
     * @param array $animals
     * @param DontKnowSwallowedAnimalVerse $dontKnowSwallewedAnimalVerse
     */
    private function addStrophesInTheMiddle(array $animals, DontKnowSwallowedAnimalVerse $dontKnowSwallewedAnimalVerse): void
    {
        for ($i = 1; $i < sizeof($animals) - 2; $i++) {
            $strophe = new Strophe();
            $currentAnimal = $animals[$i];
            $previousAnimal = $animals[$i - 1];

            $strophe->addVerse(new Verse(sprintf(self::VERSES_IN_THE_MIDDLE[$i], $currentAnimal)));
            $strophe = $this->addAnimalsVerseToStrophe($currentAnimal, $previousAnimal, $strophe);
            $strophe->addVerse($dontKnowSwallewedAnimalVerse);

            $this->song->addStrophe($strophe);
        }
    }

    /**
     * @param string $lastAnimal
     */
    private function addFinalStrophe(string $lastAnimal): void
    {
        $verseSemiFinal = new SwallowedAnimalVerse($lastAnimal, "...");
        $finalVerse = new Verse(self::SHE_S_DEAD_OF_COURSE);

        $this->addAndCreateStropheWithVerses([
                $verseSemiFinal,
                $finalVerse,
            ]
        );
    }

}
