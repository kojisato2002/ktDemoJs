<?php

class FooTest extends PHPUnit_Framework_TestCase

{
  public function testEqual()
  {
    // 第1引数には期待される値
    // 第2引数には、テスト対象のメソッドを記述
    $this->assertEquals(0, 0);
  }
} 
?>
