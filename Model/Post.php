<?php

declare(strict_types=1);


class Post
{
    private $date;
    private $title;
    private $author;
    private $content;


    // constructor
    function __construct($date, $title,  $author, $content)
    {
        $this->date = $date;
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getContent()
    {
        return $this->content;
    }
}
