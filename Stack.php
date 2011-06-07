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
    if($this->isEmpty()){
      throw new EmptyStackException();
    }
    return $this->value;
  }

  public function size(){
    return $this->size;
  }

  public function pop(){
    if($this->isEmpty()){
      throw new EmptyStackException();
    }
    --$this->size;
  }
}

class EmptyStackException extends Exception
{
}
