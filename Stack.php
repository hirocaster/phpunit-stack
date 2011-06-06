<?php
class Stack
{
  public function isEmpty(){
    return true;
  }

  private $value = 0;

  public function push($value){
    $this->value = $value;
  }

  public function top(){
    return $this->value;
  }
}
