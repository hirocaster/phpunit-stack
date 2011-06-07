<?php
class Stack
{
  public function isEmpty(){
    return $this->size === 0;
  }

  private $value = 0;
  private $size = 0;

  public function push($value){
    $this->value = $value;
    ++$this->size;
  }

  public function top(){
    $this->emptyCheck();
    return $this->value;
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
