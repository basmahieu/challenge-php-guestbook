<?php

declare(strict_types=1);

class Guestbook
{
    public function newPost($date, $title, $author,  $content)
    {
        $file = 'guestbook.txt';

        $newPost = new Post($date, $title, $author,  $content);
        file_put_contents($file, serialize($newPost), FILE_APPEND);
    }

    public function addPost()
    {
        $posts = file_get_contents("guestbook.txt");
        unserialize($posts);

        echo     '<div class="bg-light container p-4 mt-4 rounded shadow p-3">';
        print_r($posts);
        echo     '</div>';
    }
}







// class Guestbook
// {
//     public function newPost($date, $title, $author,  $content)
//     {
//         $file = 'guestbook.txt';

//         $newPost = new Post($date, $title, $author,  $content);
//         file_put_contents($file, serialize($newPost), FILE_APPEND);
//     }

//     public function addPost()
//     {
//         $posts = file_get_contents("guestbook.txt");
//         unserialize($posts);

//         echo     '<div class="bg-light container p-4 mt-4 rounded shadow p-3">';
//         print_r($posts);
//         echo     '</div>';
//     }
// }
