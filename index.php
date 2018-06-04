<?php

require_once './model/CustomSmarty.class.php';

$smarty = new CustomSmarty();

var_dump($smarty->template_dir);
echo "<hr>";
var_dump($smarty->compile_dir);
echo "<hr>";

$smarty->assign('name', 'Hello');
$smarty->display('index.tpl');


