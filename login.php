<?php
$reg_failed = '';
 include_once('dbFunction.php');
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
        $reg_failed = "Your EmailId / Password Not Match!!!";
    }  
}
?>
<?php
if($reg_failed){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> ' . $reg_failed . '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
  </div>';
   }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login Form!</title>
  </head>
  <body>
                        <div id="login" class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">  
                           <form name="login" method="post" action="">  
                                <h1>Log in</h1>
                                <hr>   
                                <div class="form-group">   
                                    <label for="emailsignup" data-icon="e" > Your email</label>  
                                    <input class="form-control" id="emailsignup" name="emailid" required="required" type="email" placeholder="mysupermail@mail.com"/>   
                                </div>  
                                <div class="form-group">   
                                    <label for="password" data-icon="p"> Your password </label>  
                                    <input class="form-control" id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />   
                                </div>  
                                <button type="submit" name="login" value="Login" class="btn btn-outline-primary">Login</button>  
                                <p>  
                                    Not a member yet ?  
                                    <a href="index.php" class="to_register">Join us</a>  
                                </p>  
                            </form>  
                        </div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>