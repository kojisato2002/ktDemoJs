<?php

/* ConnectKintone Classのテスト*/

require_once '../model/ConnectKintone.class.php';

define("API_TOKEN", "sRLfFP5SMutRsozrZw6xcnZvvWpTCgnwzZxeSTzA"); 
define("SUB_DOMAIN", "si-team-dev"); 
define("APP_NO", "169"); 

class ConnectKintoneTest extends PHPUnit_Framework_TestCase {
  public function testAccessor() {

    $ck = new ConnectKintone();

    $ck->setApiToken(API_TOKEN);
    $this->assertSame(API_TOKEN, $ck->getApiToken());

    $ck->setSubDomain(SUB_DOMAIN);
    $this->assertSame(SUB_DOMAIN, $ck->getSubDomain());

    $ck->setAppNo(APP_NO);
    $this->assertSame(APP_NO, $ck->getAppNo());

  }

  public function textBascException() {





  }

}

?> 
