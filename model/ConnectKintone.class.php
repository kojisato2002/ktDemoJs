<?php

class ConnectKintone {

  private $apiToken = '';
  private $subDomain ='';
  private $appNo = '';
  
  public function setApiToken($_apiToken) {
    $this->apiToken = $_apiToken;
  }
  public function getApiToken() { return $this->apiToken; }

  public function setSubDomain($_subDomain) {
    $this->subDomain = $_subDomain;
  }
  public function getSubDomain() { return $this->subDomain; }

  public function setAppNo($_appNo) {
    $this->appNo = $_appNo;
  }
  public function getAppNo() { return $this->appNo; }

  public function getRecords() {
    //サーバ送信するHTTPヘッダを設定
    $options = array(
      'http'=>array(
        'method'=>'GET',
        'header'=> "X-Cybozu-API-Token:". $apiToken ."\r\n"
       )
    );
    //コンテキストを生成
    $context = stream_context_create( $options );
    $uri = 'https://'. $subDomain .'.cybozu.com/k/v1/records.json?app='. $appNo;
    // サーバに接続してデータを貰う
    $contents = file_get_contents( $uri, FALSE, $context );
    
    //JSON形式からArrayに変換
    $data = json_decode($contents, true);
    return $data;
   
  }

}


