<?php
include_once('messg.php'); 
include_once('general.php');
$funObj1 = new general();  
$funObj2 = new messages();
//This is registration page message
$error1 = $funObj2->warning('Please enter all the fields carefully!!!');
$error2 = $funObj2->error('Password Not Match!!!');
$error3 = $funObj2->error('This email is already taken!!!');
$error4 = $funObj2->error('Enter Valid Phone Num!!!');
$error5 = $funObj2->error('Password contain one special character,one capital letter and not less than 5!!!');
$error6 = $funObj2->error('Registration Not Successful!!!');
$success1 = $funObj2->success('Registration Successfully done!!!');

//This is registration page  message
$error21 = $funObj2->error('Your EmailId / Password Not Match!!!');

?>