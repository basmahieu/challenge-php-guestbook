<?php

declare(strict_types=1);

// require 'Post.php';

// DATA FROM FORM + CHECK
$titleErr = $authorErr = $contentErr = $dateErr = "";
$title = $author = $content =  $date = "";
$file = 'guestbook.txt';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Date
    if (empty($_POST["date"])) {
        $dateErr = "* Date is required";
    } else {
        $date = checkInput($_POST["date"]);
    }

    // Title
    if (empty($_POST["title"])) {
        $titleErr = "* Title is required";
    } else {

        $title = checkInput($_POST["title"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $title)) {
            $titleErr = "* Only letters and white space allowed";
        }
    }

    // Author
    if (empty($_POST["author"])) {
        $authorErr = "* Author is required";
    } else {

        $author = checkInput($_POST["author"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $author)) {
            $authorErr = "* Only letters and white space allowed";
        }
    }

    // Content
    if (empty($_POST["content"])) {
        $contentErr = "* Content is required";
    } else {

        $content = checkInput($_POST["content"]);
    }
}

// CHECK DATAT INPUT
function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// TOTAL FORM
if (!empty($_POST["title"]) && !empty($_POST["author"]) && !empty($_POST["content"])) {

    $formValidation = true;
} else {
    $formValidation = false;
    echo '<div class="rounded-0 alert alert-danger" role="alert">Please fill in all required fields</div>';
}


if ($formValidation === true) {
    echo '<div class="rounded-0 alert alert-success " role="alert ">Looking good!</div>';
    $newPost = new Post($date, $title, $author,  $content);
    file_put_contents($file, serialize($newPost), FILE_APPEND);
}



function printPost()
{
    $guestbookPosts = file_get_contents("guestbook.txt");
    unserialize($guestbookPosts);
}
printPost();

// echo "<pre>";
// print_r($myArray);
// echo "<pre>";


// function printPost()
// {
//     $guestbookPosts = file_get_contents("guestbook.txt");
//     print_r($guestbookPosts);
//     echo '<br>';
//     print_r(unserialize($guestbookPosts));
// }