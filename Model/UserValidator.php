<?php

declare(strict_types=1);

require 'Guestbook.php';
require 'Post.php';


$titleErr = $authorErr = $contentErr = $dateErr = "";
$title = $author = $content =  $date = "";
$formValidation = '';



// VALIDATOR
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Date
    if (empty($_POST["date"])) {
        $dateErr = "* Date is required";
        $formValidation = false;
    } else {
        $date = checkInput($_POST["date"]);
        $formValidation = true;
    }

    // Title
    if (empty($_POST["title"])) {
        $titleErr = "* Title is required";
        $formValidation = false;
    } else {

        $title = checkInput($_POST["title"]);
        $formValidation = true;


        if (!preg_match("/^[a-zA-Z-' ]*$/", $title)) {
            $titleErr = "* Only letters and white space allowed";
            $formValidation = false;
        }
    }

    // Author
    if (empty($_POST["author"])) {
        $authorErr = "* Author is required";
        $formValidation = false;
    } else {

        $author = checkInput($_POST["author"]);
        $formValidation = true;


        if (!preg_match("/^[a-zA-Z-' ]*$/", $author)) {
            $authorErr = "* Only letters and white space allowed";
            $formValidation = false;
        }
    }

    // Content
    if (empty($_POST["content"])) {
        $contentErr = "* Content is required";
        $formValidation = false;
    } else {

        $content = checkInput($_POST["content"]);
        $formValidation = true;
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


if ($formValidation === true) {
    echo '<div class="rounded-0 alert alert-success " role="alert ">Looking good!</div>';
    $guestbook = new Guestbook;
    $guestbook->newPost($date, $title, $author,  $content);
    $guestbook->addPost();
} else {
    echo '<div class="rounded-0 alert alert-danger" role="alert">Please fill in all required fields</div>';
}
