<?php

  echo "<link rel='stylesheet' type='text/css' href='css/gistfile.css'>"; 


  // 自分のkintoneの設定
  define("API_TOKEN", "sRLfFP5SMutRsozrZw6xcnZvvWpTCgnwzZxeSTzA"); 
  define("SUB_DOMAIN", "si-team-dev"); 
  define("APP_NO", "169"); 


  //サーバ送信するHTTPヘッダを設定
  $options = array(
    'http'=>array(
      'method'=>'GET',
      'header'=> "X-Cybozu-API-Token:". API_TOKEN ."\r\n"
    )
  );
  //コンテキストを生成
  $context = stream_context_create( $options );
  // サーバに接続してデータを貰う
  $contents = file_get_contents( 'https://'. SUB_DOMAIN .'.cybozu.com/k/v1/records.json?app='. APP_NO , FALSE, $context );

  //var_dump($http_response_header); //ヘッダ表示
				
  //JSON形式からArrayに変換
  $data = json_decode($contents, true);

  echo "<center>";
  echo "<h3>List of Reference Materials (RMs)</h3>";


  //Form
  $str  = "<form action='gistfile2.php' method='post'>";


  //表示は単純なテーブルで
  $str .= "<table class='table1'>";
  $str .= "<tr>";
  $str .= "<th>Record No.</th>";
  $str .= "<th>Create Date</th>";
  $str .= "<th>Creater</th>";	
  $str .= "<th>Descliption</th>";	
  $str .= "<th>Attach</th>";	
  $str .= "<th>Quantity</th>";	
  $str .= "</tr>";
  echo $str;
  $cnt = 0;
				
  for($i=0; $i<count($data['records']); $i++){
    $param = 'fileKey=' . $data['records'][$i]['添付ファイル']['value'][0]['fileKey'];

    $contents = file_get_contents('https://' . SUB_DOMAIN . '.cybozu.com/k/v1/file.json?' . $param, false, $context);

    echo "<tr>";

    echo sprintf("<td>%s</td>", $data['records'][$i]['レコード番号']['value']);
    echo sprintf("<td>%s</td>", $data['records'][$i]['作成日時']['value']);
    echo sprintf("<td>%s</td>", $data['records'][$i]['作成者']['value']['name']);
    echo sprintf("<td>%s</td>", $data['records'][$i]['文字列__1行_']['value']);
    echo "<td><img src='data:image/jpeg;base64,". base64_encode($contents) . "'></td>";

    echo "<td>";
    echo "<select name='num_order[]'l>";
    echo "<option value='0' selected>0</option>";
    echo "<option value='1'>1</option>";
    echo "<option value='2'>2</option>";
    echo "<option value='3'>3</option>";
    echo "<option value='4'>4</option>";
    echo "<option value='5'>5</option>";
    echo "<option value='6'>6</option>";
    echo "<option value='7'>7</option>";
    echo "<option value='8'>8</option>";
    echo "<option value='9'>9</option>";
    echo "<option value='10'>10</option>";
    echo "</select>";
    echo "pack</td>";
    echo "</tr>";
    $cnt++;

  }
    echo "</table>";
    echo "<input type='hidden' name='cnt' value='".$cnt."'>";
    echo "<p><input type='submit' value='Confirmation'>";
    echo "</form>";
    echo "</center>";
?>
