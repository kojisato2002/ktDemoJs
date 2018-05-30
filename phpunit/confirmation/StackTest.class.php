<?php
  /*
  配列操作のテスト
  http://phpunit.readthedocs.io/ja/latest/writing-tests-for-phpunit.html
  */

class StackTest extends PHPUnit_Framework_TestCase {
  public function testPushAndPop() {

    $stack = array();
    $this->assertSame(0, count($stack));

    array_push($stack, 'foo');
    $this->assertSame('foo', $stack[count($stack)-1]);
    $this->assertSame(1, count($stack));

    $this->assertSame('foo', array_pop($stack));
    $this->assertSame(0, count($stack));

  }
}

?> 
