<?php
class Stack
{
  public function isEmpty(){
    return $this->size === 0;
  }

  private $value = array();
  private $size = 0;

  public function push($value){
    $this->value[$this->size++] = $value;
  }

  public function top(){
    $this->emptyCheck();
    return $this->value[$this->size - 1];
  }

  public function size(){
    return $this->size;
  }

  public function pop(){
    $this->emptyCheck();
    --$this->size;
  }

  private function emptyCheck() {
    if($this->isEmpty()){
      throw new EmptyStackException();
    }
  }
}

class EmptyStackException extends Exception
{
}
