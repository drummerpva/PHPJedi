<?php
require "facebook.php";

$fb = new Facebook();

$post = $fb->createPost();
$post->setAuthor("Douglas");
$post->setMessage("Mensagem da Postagem");

echo "Author: ".$post->getAuthor();
echo "<hr/>";

$post2 = $fb->createPost();
$post2->setAuthor("Elaine");
$post2->setMessage("Message 2"); 

echo "Author 1: ".$post->getAuthor()."<br>Author 2: ".$post2->getAuthor();
