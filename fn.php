<?php
function HTML_header($page_id, $title, $CSS=array(), $JS=array()){
  include 'HTML_header.php';
}

function HTML_footer($page_id){
  include 'HTML_footer.php';
}

function is_err(){
  return !empty($_SESSION['app_err']);
}

function err($err_msg){
  $_SESSION['app_err'][] = $err_msg;
}

function print_errs(){
 if(isset($_SESSION['app_err']) && !empty($_SESSION['app_err'])){
  $html="<ol class='error'>";
  foreach ($_SESSION['app_err'] as $err){
    $html.="<li><b>".$err."</b></li>";
  }
  $html.="</ol>";
  unset($_SESSION['app_err']);
 }  
 return $html;
}

function is_msg(){
  return !empty($_SESSION['app_msg']);
}

function msg($app_msg){
  $_SESSION['app_msg'][] = $app_msg;
}

function print_msgs(){
 if(isset($_SESSION['app_msg']) && !empty($_SESSION['app_msg'])){
  $html="<ol class='info'>";
  foreach ($_SESSION['app_msg'] as $msg){
    $html.="<li><b>".$msg."</b></li>";
  }
  $html.="</ol>";
  unset($_SESSION['app_msg']);
 }  
 return $html;
}

function array_unique_merge() {
  $args = func_get_args();
  return array_unique(call_user_func_array('array_merge', $args));
}

function translate_utf8ToW1250($str){
  return iconv("utf-8", "windows-1250", $str);
} 

function translate_W1250ToUtf8($str){
  return iconv("windows-1250", "utf-8", $str);
} 

function my_arrayMap($callback,$arr1) { 
  $results = array(); 
  $args    = array(); 
  if(func_num_args()>2) 
    $args = (array) array_shift(array_slice(func_get_args(),2)); 
  foreach($arr1 as $key=>$value) { 
    $temp = $args; 
    array_unshift($temp,$value); 
    if(is_array($value)) { 
        array_unshift($temp,$callback); 
        $results[$key] = call_user_func_array('my_arrayMap',$temp); 
    } else { 
        $results[$key] = call_user_func_array($callback,$temp); 
    } 
  } 
  return $results; 
}

?>
