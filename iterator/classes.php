<?php

class Book {

    private $author;
    private $title;

    public function __construct($t, $a) {
        $this->author = $a;
        $this->title = $t;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

}

class BookList {

    private $books;
    private $currentIndex;

    public function __construct() {
        $this->currentIndex = 0;
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function count() {
        return count($this->books);
    }

    public function removeBook(Book $book) {
        foreach ($this->books as $key => $value) {
            if (($value->getTitle() . $value->getAuthor()) == ($book->getTitle() . $book->getAuthor())) {
                unset($this->books[$key]);
            }
        }
        $this->books = array_values($this->books);
    }
    
    public function current(){
        return $this->books[$this->currentIndex];
    }
    public function next(){
        $this->currentIndex++;
    }
    public function key(){
        return $this->currentIndex;
    }
    public function reset(){
        $this->currentIndex = 0;
    }
    public function valid(){
        if(isset($this->books[$this->currentIndex])){
            return true;
        }else{
            return false;
        }
    }

}
