<?php
include_once('class/dibi/dibi.php');

dibi::connect(array(
    'driver'   => 'mysql',
    'host'     => 'localhost',
    'username' => 'prosrodbuser',
    'password' => 'prosroNOZ2014',
    'database' => 'prosro',
    'charset'  => 'cp1250'
));
?>
