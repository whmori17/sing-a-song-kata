<?php

class Strophe
{
    /**
     * @var array
     */
    private $verses;

    /**
     * @var string
     */
    private $content;

    /**
     * Strophe constructor.
     * @param array $verses
     */
    public function __construct(array $verses = [])
    {
        $this->verses = $verses;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        $this->content = '';

        foreach($this->verses as $verse) {
            $this->content .= $verse->getContent();
        }

        return $this->content;
    }

    /**
     * @param Verse $verse
     */
    public function addVerse(Verse $verse): void
    {
        $this->verses[] = $verse;
    }

}
