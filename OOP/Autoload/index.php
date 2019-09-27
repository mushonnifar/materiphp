<?php

require "Category.php";
require "Post.php";

//spl_autoload_register(function ($class) {
//    $file = __DIR__ . '/' . $class . '.php';
//    if (is_readable($file)) {
//        require $file;
//    }
//});

$category = new Category;
$post = new Post();
echo "Category : " . $category->getName();


echo ", Title : " . $post->getTitle();
echo ", Isinya : " . $post->getBody() . "<br>";
