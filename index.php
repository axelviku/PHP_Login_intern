<?php  
    include_once('dbFunction.php');  
       $reg_success=$reg_not_success=$email_exist=$pass_match= $valid_phn_num= ''; 
     $funObj = new dbFunction();   
    if(!empty($_POST['register'])){  
        $username = $_POST['username']; 
        $phonenum = $_POST['number']; 
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
        $confirmPassword = $_POST['confirm_password'];  
        if($password == $confirmPassword){  
            $email = $funObj->isUserExist($emailid);  
            if(!$email){  
                $phone = $funObj->validating($phonenum);
                if($phone){
                $register = $funObj->UserRegister($username, $emailid, $password);  
                if($register){  
                    $reg_success = "Registration Successfully done!!!"; 
                }else{  
                    $reg_not_success = "Registration Not Successful!!!"; 
                }  
             }else{
                 $valid_phn_num = "Enter Valid Phone Num!!!";
             }
            } else {  
                $email_exist = "Email Already Exist!!!";  
            }  
        } else {  
            $pass_match = "Password Not Match!!!";          
        }  
    }  
?>  
<!-- this include the alert message shown on the registration page  -->
<?Php include 'alert.php';?>

<!DOCTYPE html>  
 <html lang="en" class="no-js">  
 <head>  
        <meta charset="UTF-8" />  
        <title>Registration Form</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />  
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />  
        <meta name="author" content="Codrops" />  
        <link rel="shortcut icon" href="../favicon.ico">   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>  
    <body>  
        <div class="container">  
            <header>  
                <h1 class="text-center pt-5">Registration Form  </h1>  
            </header>  
            <section>               
                <div id="container_demo" >  
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4"> 
                    <hr> 
                        <div id="register">  
                            <form name="login" method="post" action="">     
                                <div class="form-group">   
                                    <label for="usernamesignup" data-icon="u">Your username</label>  
                                    <input class="form-control" id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />  
                                </div>  
                                <div class="form-group">   
                                    <label for="emailsignup" data-icon="e" > Your email</label>  
                                    <input class="form-control" id="emailsignup" name="emailid" required="required" type="email" placeholder="mysupermail@mail.com"/>   
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>  
                                <div class="form-group">   
                                    <label for="PhoneNum" data-icon="p">Phone Number</label>  
                                    <input class="form-control" id="phonenum" name="number" required="required" type="number" placeholder="eg.9973462210"/>  
                                </div>
                                <div class="form-group">   
                                    <label for="passwordsignup" data-icon="p">Your password </label>  
                                    <input class="form-control" id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>  
                                </div>  
                                <div class="form-group">   
                                    <label for="passwordsignup_confirm" data-icon="p">Please confirm your password </label>  
                                    <input class="form-control" id="passwordsignup_confirm" name="confirm_password" required="required" type="password" placeholder="eg. X8df!90EO"/>  
                                </div>  
                                <button type="submit" name="register" value="Sign up" class="btn btn-outline-primary">Sign up</button>  
                                <p>    
                                    Already a member ?  
                                    <a href="login.php" class="to_register"> Go and log in </a>  
                                </p>  
                            </form>  
                        </div>  
                          
                    </div>  
                </div>    
            </section>  
        </div>
        
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>  
</html>  