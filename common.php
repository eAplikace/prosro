<?php
Header("Expires: ".GMDate("D, d M Y H:i:s")." GMT");    // neukladat stranku do cache
session_start();
define('DEBUG', true);
define('OK', '-ok-');   //ajax OK prefix
define('ERR', '-err-'); //ajax Error prefix
define('MSG', '-msg-'); //ajax Messsage prefix
//include_once 'const.php';
include_once 'fn.php';
//include_once 'db_connect.php';
//db_connect();

$css = array();
$js = array();

//$css['screen'][]='css/common.css';
//$js[] = 'js/jquery.js';
//$js[] = "js/jquery.qtip.js";
//$js[] = 'js/common.js';
//$js[] = "js/reporting.js"; 

?>
