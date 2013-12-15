<?php
function mail_exists($mail){
  //to return true mail must be activated or if it is not the activation code must be valid
  $res = dibi::query("SELECT count(*) as c 
                      FROM [user] 
                      WHERE (email_confirmed_ts IS NOT NULL OR email_confirm_code_ts > DATE_SUB(CURDATE(), INTERVAL ".EMAIL_CONFIRM_CODE_VALID_PERIOD." DAY)) 
                        AND [email]=%s", $mail);                      
  $count = $res->fetchSingle();
  return $count >= 1; 
}

function ico_exists($ico){
  //to return true mail must be activated or if it is not the activation code must be valid
  $res = dibi::query("SELECT count(*) as c 
                      FROM [user] 
                      WHERE (email_confirmed_ts IS NOT NULL OR email_confirm_code_ts > DATE_SUB(CURDATE(), INTERVAL ".EMAIL_CONFIRM_CODE_VALID_PERIOD." DAY)) 
                        AND [ico]=%s", $ico);
  $count = $res->fetchSingle();
  return $count >= 1; 
}

function send_registration_email($input_email, $activation_code){
  $subject =  "Registrace";
  $confirm_link = WEBSITE_URL."/register.php?act=accountActivation&email=".urlencode($input_email)."&code=".$activation_code;
  $content = "<p>Pro dokončení registrace skopírujte následující odkaz do internetového prohlížeče a otevřete ho:</p>";
  $content.= "<p>$confirm_link</p>";
  return send_email($subject, $content, $input_email);
}

function process_registration_form($D){
  $status = true;
  //spam check
  if(isset($D['tfield']) && $D['tfield']!='') {err('Spam Attack!!'); $status = false;}
  
  $input_ICO = strip_tags($D['ico']);
	$input_email = strip_tags($D['email']);
	$input_password = strip_tags($D['pswd']);
	$input_password2 = strip_tags($D['pswd_confirm']);
	$input_agreemnt = ($D['agreement']=='1') ? true : false;
  
  //mail check  
  if( !filter_var($input_email, FILTER_VALIDATE_EMAIL) ) {err('E-mailová adresa není platná.'); $status=false;}
  if(mail_exists($input_email)) {err('Zadaná e-mailová adresa je v systému už zaregistrovaná.'); $status=false;} 
  
  //ICO check
  if( strlen($input_ICO) < 8 ) {err('Prosím zadejte platné IČO!'); $status=false;} 
  if(ico_exists($input_email)) {err('Zadané IČO je v systému už zaregistrované.'); $status=false;}
  
  //password check
  if(trim($input_password)=="") {err('Prosíme, vyplňte heslo.'); $status=false;} 
  if($input_password != $input_password2) {err('Zadané hesla musí být stejné. Pozor na velká a malá písmena!'); $status=false;} 
  
  //User Agreement check
  if(!$input_agreemnt) {err('Pro úspěšnou registraci musíte souhlasit s obchodními podmínkami.'); $status=false;}  
  
  if(!$status) return $status;
  
  //Save data
  $activation_code = md5(uniqid(rand(), true));
  $dbIn = array(
    'pid'  => NULL,
    'uts'  => new DateTime,
    'ico'  => $input_ICO,
    'email'=> $input_email,
    'email_confirm_code' => $activation_code,
    'email_confirm_code_ts' => new DateTime,
    'pswd' => array('MD5(%s)', $input_password),
    'agreement_ts' => new DateTime
  );
  dibi::query('INSERT INTO [user]', $dbIn);
  
  //setup confirmation email
  $email_status = send_registration_email($input_email, $activation_code);
  
  if($email_status===TRUE) msg("Na Váš email byl zaslán odkaz pro aktivaci Vašeho konta.");
  else {err('Na email <i>'.$input_email.'</i> se nepovedlo zaslat email. Zkuste to, prosím, znova.'); $status=false;}
  
  return $status;
}

function activate_account_after_registration($email, $hash){
   $status = true;
   
  //check email existence
  if(!mail_exists($email)){
    err("Email, kterého konto se snažíte aktivovat, neexistuje, nebo vypršela doba platnosti aktivačního kódu."); print_errs();
    $status = false; 
    return $status;
  }
  
  $wAnd1 = array('%and', array('email_confirmed_ts IS NULL',
                               'email_confirm_code_ts > DATE_SUB(CURDATE(), INTERVAL '.EMAIL_CONFIRM_CODE_VALID_PERIOD.' DAY)'));
  $wAnd2 = array('%and', array(array('email=%s', $email),
                               array('email_confirm_code=%s', $hash)));               
   
  dibi::test('SELECT count(*) as c 
               FROM [user] 
               WHERE %and', array($wAnd1, $wAnd2));               
  
  //check validity of activation code
  $res = dibi::query('SELECT count(*) as c 
               FROM [user] 
               WHERE %and', array($wAnd1, $wAnd2));        
  $count = $res->fetchSingle();
  if($count != 1){
    err("Aktivační kód není správný, nebo už není palatný."); print_errs(); 
    $status = false; 
    return $status;
  }
  
  //activate account
  $dbIn = array('email_confirmed_ts'  => new DateTime, 'active'=>1);
  dibi::update('user', $dbIn)
        ->where('%and', array(array('email=%s', $email), array('email_confirm_code=%s', $hash)))
        ->execute();
  
  return $status;   
}

?>
