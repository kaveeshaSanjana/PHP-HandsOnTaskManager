<?php

class Task {
  private $title;
  private $date;
  private $isCompleated;  

  public function __construct( $title, $date, $isCompleated ) {         
    $this->title = $title;
    $this->date = $date;
    $this->isCompleated = $isCompleated;
  }

  public function getTitle() {
    return $this->title;
  }
  public function getDate() {
    return $this->date;
  }
  public function getIsCompleated() {
    return $this->isCompleated;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function setDate($date) {
    $this->date = $date;
  }
  public function setIsCompleated($isCompleated) {
    $this->isCompleated = $isCompleated;
  }            
}