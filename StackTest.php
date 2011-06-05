<?php
require_once 'PHPUnit/Framework.php';
require_once 'Stack.php';

class StackTest extends PHPUnit_Framework_TestCase
{
  public function testCreate(){
    $this->assertTrue($stack->isEmpty());
  }
}
