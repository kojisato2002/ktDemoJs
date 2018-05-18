<?php

  // Smartyインストールディレクトリを定数定義
define( 'SMARTY_DIR', '/var/lib/php/smarty-3.1.32/libs/' );

// Smartyを使うための準備
require_once( SMARTY_DIR . 'Smarty.class.php' );


if (class_exists('Smarty')) {
  $smary =& new Smarty;

  var_dump($smary);

  //  printf("you can use Smarty(version %s).\n", $smary->_version);

} else {
  echo "you can't use Smarty.\nplease install Smarty library.";
}

?>

 
