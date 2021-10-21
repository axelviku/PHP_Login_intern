<?php  
    include_once('dbFunction.php');  
       $reg_success=$reg_not_success=$email_exit=$pass_match= ''; 
    $funObj = new dbFunction();  
    if(!empty($_POST['login'])){  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
        $user = $funObj->Login($emailid, $password);  
        if ($user) {  
            // Registration Success  
           header("location:home.php");  
        } else {  
            // Registration Failed  
            echo "<script>alert('Emailid / Password Not Match')</script>";  
        }  
    }  
    if(!empty($_POST['register'])){  
        $username = $_POST['username'];  
        $emailid = $_POST['emailid'];  
        $password = $_POST['password'];  
        $confirmPassword = $_POST['confirm_password'];  
        if($password == $confirmPassword){  
            $email = $funObj->isUserExist($emailid);  
            if(!$email){  
                $register = $funObj->UserRegister($username, $emailid, $password);  
                if($register){  
                    $reg_success = "Registration Successfully done!!!"; 
                }else{  
                    echo "<script>alert('Registration Not Successful')</script>";  
                }  
            } else {  
                echo "<script>alert('Email Already Exist')</script>";  
            }  
        } else {  
            echo "<script>alert('Password Not Match')</script>";  
          
        }  
    }  
?>  
<?php
 if($reg_success){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> ' . $reg_success . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>';
 }
?>

<!DOCTYPE html>  
 <html lang="en" class="no-js">  
 <head>  
        <meta charset="UTF-8" />  
        <title>Login and Registration Form</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />  
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />  
        <meta name="author" content="Codrops" />  
        <link rel="shortcut icon" href="../favicon.ico">   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" />  
        <link rel="stylesheet" type="text/css" href="css/style2.css" />  
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />   -->
    </head>  
    <body>  
        <div class="container">  
            <header>  
                <h1>Login and Registration Form  </h1>  
            </header>  
            <section>               
                <div id="container_demo" >  
                     
                    <a class="hiddenanchor" id="toregister"></a>  
                    <a class="hiddenanchor" id="tologin"></a>  
                    <div id="wrapper">  
                        <div id="login" class="animate form">  
                           <form name="login" method="post" action="">  
                                <h1>Log in</h1>   
                                <div class="form-group">   
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>  
                                    <input class="form-control" id="emailsignup" name="emailid" required="required" type="email" placeholder="mysupermail@mail.com"/>   
                                </div>  
                                <div class="form-group">   
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>  
                                    <input class="form-control" id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />   
                                </div>  
                                <!-- <p class="keeplogin">   
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />   
                                    <label for="loginkeeping">Keep me logged in</label>  
                                </p>   -->
                                <p class="login button">   
                                    <input type="submit" name="login" value="Login" />   
                                </p>  
                                <p class="change_link">  
                                    Not a member yet ?  
                                    <a href="#toregister" class="to_register">Join us</a>  
                                </p>  
                            </form>  
                        </div>  
  
                        <div id="register" class="animate form">  
                            <form name="login" method="post" action="">  
                                <h1> Sign up </h1>   
                                <div class="form-group">   
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>  
                                    <input class="form-control" id="usernamesignup" name="username" required="required" type="text" placeholder="mysuperusername690" />  
                                </div>  
                                <div class="form-group">   
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>  
                                    <input class="form-control" id="emailsignup" name="emailid" required="required" type="email" placeholder="mysupermail@mail.com"/>   
                                </div>  
                                <div class="form-group">   
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>  
                                    <input class="form-control" id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>  
                                </div>  
                                <div class="form-group">   
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>  
                                    <input class="form-control" id="passwordsignup_confirm" name="confirm_password" required="required" type="password" placeholder="eg. X8df!90EO"/>  
                                </div>  
                                <div class="form-group">   
                                    <input type="submit" name="register" value="Sign up"/>   
                                </div>  
                                <p class="change_link">    
                                    Already a member ?  
                                    <a href="#tologin" class="to_register"> Go and log in </a>  
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