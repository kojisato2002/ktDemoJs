<?php

  // Example 2.4 複数の依存性を持つテスト
  // http://phpunit.readthedocs.io/ja/latest/writing-tests-for-phpunit.html

class MiltipleDependenciesTest extends PHPUnit_Framework_TestCase
{
  public function testProducerFirst()
  {
    $this->assertTrue(true);
    return 'first';
  }

  public function testProducerSecond()
  {
    $this->assertTrue(true);
    return 'second';
  }

  /**
   * @depends testProducerFirst
   * @depends testProducerSecond
   */
  public function testConsumer($a, $b)
  {
    $this->assertSame('first', $a);
    $this->assertSame('second', $b);
  }
}
