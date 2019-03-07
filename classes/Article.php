<?php

class Article
{
    /**
     * @var int
     */
    protected $id = 0;
    /**
     * @var string
     */
    protected $author = '';
    /**
     * @var string
     */
    protected $fullText = '';
    /**
     * @var string
     */
    protected $title = '';

    /**
     * Article constructor.
     * @param int $id
     * @param string $author
     * @param string $shortText
     * @param string $fullText
     */
    public function __construct(int $id, string $author, string $shortText, string $fullText)
    {
        $this->id = $id;
        $this->author = $author;
        $this->title = $shortText;
        $this->fullText = $fullText;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getFullText(): string
    {
        return $this->fullText;
    }


}