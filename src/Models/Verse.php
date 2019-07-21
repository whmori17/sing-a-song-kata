<?php

class Verse
{
    /**
     * @var string
     */
    protected $content;

    /**
     * Verse constructor.
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

}
