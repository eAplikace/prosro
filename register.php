<?php
include_once 'admin/class/class.phpmailer.php';
include_once 'common.php';
include_once 'register_fn.php';

if(!empty($_POST['act']))
  switch($_POST['act']){
    case 'proc_reg_form':
     $status = process_registration_form($_POST);
     if($_POST['ajax']=='1'){
       if(!$status) echo ERR.print_errs();
       else echo MSG.print_msgs();
       exit;
     }
     break;
    default:
     exit;
  }
  
elseif(!empty($_GET['act']))
 switch($_GET['act']){
    case 'accountActivation':
     $status = activate_account_after_registration(urldecode($_GET['email']), $_GET['code']);
     break;
    default:
     exit;
  }

?>
