<?php
/*
x Add a variable called $title and set it to the title of the blog post and part of the title of the page.
x Add a variable called $author and set it to the author of the blog post.
x Add a variable called $body and set it to the body of the blog post.
x Add a variable called $pageTitle with the string "Brad's PHP Blog | and the title of the blog post. You can use concatenation or interpolation to combine the two strings. If you use concatenation, be sure to escape the apostrophe/single quote in "Brad's".
*/
$title = "Introduction to PHP";
$author = "John Doe";
$body = "PHP (Hypertext Preprocessor) is a widely used server-side scripting
language that has revolutionized web development. With its simplicity,
flexibility, and vast community support, PHP has become the backbone of
countless dynamic websites and web applications.";

$pageTitle = "Brad's PHP Blog | $title";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$pageTitle?></title>
  </head>
  <body>
    <main>
      <h1>Introduction to PHP</h1>
      <p><?="By: $author"?></p>
      <p>
       <?=$body?>
      </p>
    </main>
  </body>
</html>