<?php
/* require_once 'PHPUnit/Framework.php'; */
require_once 'PHPUnit/Autoload.php';
require_once 'Stack.php';

class StackTest extends PHPUnit_Framework_TestCase
{
  public function testCreate(){
    $stack = new Stack();
    $this->assertTrue($stack->isEmpty());
  }
}
