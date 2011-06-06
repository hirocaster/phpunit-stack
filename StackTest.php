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
    $this->assertEquals(1, $this->stack->top());
  }
}
