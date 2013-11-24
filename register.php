<?php
include_once 'common.php';


function process_registration_form($D){
  $status = true;
  //spam check
  if(isset($D['tfield']) && $D['tfield']!='') {err('Spam Attack!!'); $status = false;}
  
  //mail check  
  
  //ICO check
  
  //password check
  
  //User Agreement check
  
  //Save data
  
  //setup confirmation email
  
  //Send confirmation email
  
  msg("Na Váš email byl zaslán odkaz pro aktivaci Vašeho konta.");
  
  return $status;
}

if(!empty($_POST['act']))
  switch($_POST['act']){
    case 'proc_reg_form':
     $status = process_registration_form($_POST);
     if($_POST['ajax']=='1'){
       if(!$status) echo translate_W1250ToUtf8(ERR.print_errs());
       else echo translate_W1250ToUtf8(MSG.print_msgs());
       exit;
     }
     break;
    default:
     exit;
  }
?>
