<?php

  // テストの依存性の活用
  // http://phpunit.readthedocs.io/ja/latest/writing-tests-for-phpunit.html

class DependencyFailureTest extends PHPUnit_Framework_TestCase
{
  public function testOne()
  {
    $this->assertTrue(false);
  }

  /**
   * @depends testOne
   */
  public function testTwo()
  {
  }
}
 
