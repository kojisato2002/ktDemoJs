<?php


  echo "<link rel='stylesheet' type='text/css' href='css/gistfile.css'>"; 


  if(isset($_POST['cnt'])){
    $cnt = $_POST['cnt'];
  } else {
    $uri = $_SERVER['HTTP_REFERER'];
    header("Location: ".$uri);
  }

  for ($i=0; $i<$cnt; $i++) {
    echo $_POST['num_order'][$i]."<br>";

  }


?>
