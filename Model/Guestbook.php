<?php

declare(strict_types=1);


class Guestbook
{
    private string $date;
    private string $title;
    private string $author;
    private string $content;


    public function newPost($date, $title, $author,  $content)
    {
        $this->date = $date;
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;

        $file = 'guestbook.txt';
        $newPost = new Post($date, $title, $author,  $content);
        file_put_contents($file, serialize($newPost) . PHP_EOL, FILE_APPEND);
    }

    public function addPost()
    {
        $file = 'guestbook.txt';
        $posts = explode("\n", file_get_contents($file));
        $postList = [];
        foreach ($posts as $post) {
            if (is_object(unserialize($post, [__CLASS__]))) {
                $postList = unserialize($post, [__CLASS__]);

                echo '<div class="bg-light container p-4 mt-4 rounded shadow p-3">';
                // print_r($postList);
                echo $postList->getDate();
                echo '<br>';
                echo '<b>';
                echo $postList->getTitle();
                echo '</b>';
                echo '<br>';
                echo $postList->getAuthor();
                echo '<br>';
                echo $postList->getContent();
                echo '<br>';
                echo '</div>';
            }
        }

        // echo     '<div class="bg-light container p-4 mt-4 rounded shadow p-3">';
        // print_r($postList);
        // echo     '</div>';
    }


    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }
}






// public function newPost($date, $title, $author,  $content)
// {
//     $file = 'guestbook.txt';
//     $newPost = new Post($date, $title, $author,  $content);
//     file_put_contents($file, serialize($newPost), FILE_APPEND);
// }

// public function addPost()
// {
//     $file = 'guestbook.txt';
//     $posts = file_get_contents($file);
//     unserialize($posts);

//     echo     '<div class="bg-light container p-4 mt-4 rounded shadow p-3">';
//     print_r($posts);
//     echo     '</div>';
// }























//  class Guestbook
//  {
 
 
//      public function newPost($date, $title, $author,  $content)
//      {
//          $file = 'guestbook.txt';
//          $newPost = new Post($date, $title, $author,  $content);
//          file_put_contents($file, serialize($newPost), FILE_APPEND);
//      }
 
//      public function addPost()
//      {
//          $file = 'guestbook.txt';
//          $posts = file_get_contents($file);
//          unserialize($posts);
 
//          echo     '<div class="bg-light container p-4 mt-4 rounded shadow p-3">';
//          print_r($posts);
//          echo     '</div>';
//      }
//  }
