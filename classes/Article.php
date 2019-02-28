<?php

class Article
{
    protected $id = 0;
    protected $author = '';
    protected $fullText = '';
    protected $title = '';

    public function __construct(int $id, string $author, string $shortText, string $fullText)
    {
        $this->id = $id;
        $this->author = $author;
        $this->title = $shortText;
        $this->fullText = $fullText;
    }
    public function getId(): int
    {
        return $this->id;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function getFullText():string
    {
        return $this->fullText;
    }


}