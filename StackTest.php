<?php
require_once 'PHPUnit/Autoload.php';
require_once 'Stack.php';

class StackTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){
    $this->stack = new Stack();
  }

  public function testCreate(){
    $this->assertTrue($this->stack->isEmpty());
  }

  public function testPushAndTop(){
    $this->stack->push(1);
    $this->assertFalse($this->stack->isEmpty());
    $this->assertEquals(1, $this->stack->top());
  }

  public function testPushAndSize(){
    $this->stack->push(1);
    $this->assertEquals(1, $this->stack->size());
    $this->stack->push(2);
    $this->assertEquals(2, $this->stack->size());
  }

  public function testEmptyPop(){
    try{
      $this->stack->pop();
      $this->fail();
    } catch(EmptyStackException $e){

    }
  }

  public function testPushAndPop(){
    $this->stack->push(1);
    $this->stack->pop();
    $this->assertEquals(0, $this->stack->size());
  }

  public function testEmptyTop(){
    try{
      $this->stack->top();
      $this->fail();
    } catch(EmptyStackException $e){

    }
  }
}
