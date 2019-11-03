<?php
require './classes.php';

$book1 = new Book("Teste1","Fulano1");
$book2 = new Book("Teste2","Fulano2");
$book3 = new Book("Teste3","Fulano3");

$bookList = new BookList();
$bookList->addBook($book1);
$bookList->addBook($book2);
$bookList->addBook($book3);

while($bookList->valid()){
    $livro = $bookList->current();
    echo "<p>Titulo: ".$livro->getTitle()." - ".$livro->getAuthor()."</p>";
    $bookList->next();
}
$bookList->reset();