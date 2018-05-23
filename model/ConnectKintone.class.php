<?php

class ConnectKintone {

  private $apiToken = '';
  private $subDomain ='';
  private $appNo = '';

  public function getApiToken() {
    return $this->apiToken;
  }
  public function setApiToken($_apiToken) {
    $this->apiToken = $_apiToken;
  }

  public function getSubDomain() {
    return $this->subDomain;
  }
  public function setSubDomain($_subDomain) {
    $this->subDomain = $_subDomain;
  }

  public function getAppNo() {
    return $this->appNo;
  }
  public function setAppNo($_appNo) {
    $this->appNo = $_appNo;
  }

}


