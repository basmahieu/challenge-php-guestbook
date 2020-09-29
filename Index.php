<?php

declare(strict_types=1);

// Posts must have the following attributes:
// // Title
// // Date
// // Content
// // Author name

// Use at least 2 classes: Post & PostLoader

// The messages are sorted from new (top) to old (bottom).

// Make sure the script can handle site defacement attacks: use htmlspecialchars()

// Only show the latest 20 posts.


// require('Model/Post.php');
require('Controller/PostLoader.php');
require('Model/UserValidator.php');
// require('Model/Guestbook.php');


// HTML
require('View/Main.php');
