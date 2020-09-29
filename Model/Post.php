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
}
