<?php

// Smartyインストールディレクトリを定数定義
define( 'SMARTY_DIR', '/var/lib/php/smarty-3.1.32/libs/' );

// Smartyを使うための準備
require_once( SMARTY_DIR . 'Smarty.class.php' );

class CustomSmarty extends Smarty {

  function CustomSmarty() {

    $base_dir          = "./";

    // テンプレートファイル(*.tpl)を保存するディレクトリ
    $this->template_dir = $base_dir . "templates/";

    // テンプレートをコンパイルしたファイルを保存するディレクトリ
    $this->compile_dir  = $base_dir . "templates_c/";

    if (!file_exists($this->compile_dir)) {
      mkdir($this->compile_dir);
    }

    // デバッグモードで動かす
    $this->debugging  = FALSE;
  }
}
