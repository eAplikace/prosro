<?php
Header("Expires: ".GMDate("D, d M Y H:i:s")." GMT");    // neukladat stranku do cache
session_start();
include_once 'admin/db_conn.php';
include_once 'admin/fn_super.php';
include_once 'fn.php';

$css = array();
$js = array();

//$css['screen'][]='css/common.css';
//$js[] = 'js/jquery.js';
//$js[] = "js/jquery.qtip.js";
//$js[] = 'js/common.js';
//$js[] = "js/reporting.js"; 

?>
