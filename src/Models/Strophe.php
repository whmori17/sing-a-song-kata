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

}
