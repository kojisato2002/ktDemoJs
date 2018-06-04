<?php

// Smartyインストールディレクトリを定数定義
define( 'SMARTY_DIR', '/var/lib/php/smarty-3.1.32/libs/' );

// Smartyを使うための準備
require_once( SMARTY_DIR . 'Smarty.class.php' );

class CustomSmarty extends Smarty {

  function __construct() {

    parent::__construct();

    // テンプレートファイル(*.tpl)を保存するディレクトリ
    $this->template_dir = "/var/www/html/jsdemo/view/templates/";

    // テンプレートをコンパイルしたファイルを保存するディレクトリ
    $this->compile_dir  = "/var/lib/php/smarty-3.1.32/templates_c/";

    // デバッグモードで動かす
    $this->debugging  = FALSE;

  }
}
