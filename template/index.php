<?php
abstract class Book{
  protected $title;
  protected $content;

  function setTitle($title){
    $this->title = $title;
  }

  function setContent($content){
    $this->title = $content;
  }
}

class Ebook extends Book{
  function generatePdf(){
    echo "The book {$this->title} was printed.";
  }
}

class Paperback extends Book{
  function printBook(){
    echo "A PDF was generated for the ebook {$this->title}";
  }
}

$paperback = new Paperback;
$paperback -> setTitle("The greatest paperback ever!!");
$paperback -> printBook();

$book = new Ebook();
$book->setTitle('Content teseting');
$book->generatePdf();
