<?php

require_once 'CustomSmarty.class.php';

$smarty = new CustomSmarty();

$smarty->assign('name', 'Hello');
$smarty->display('index.tpl');


