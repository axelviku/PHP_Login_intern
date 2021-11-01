<?php
include_once('dbFunction.php');
include_once('messg.php');
include_once('general.php');
$funObj = new dbFunction();  
$funObj1 = new general();
$funObj2 = new messages();
if(!empty($_POST['login'])){  
    $emailid = $_POST['emailid'];  
    $password = $_POST['password'];  
    $empty1 = $funObj1->emptyField($emailid, $password, $phonenum=!null,$username=!null);
    if($empty1){
    $user = $funObj->Login($emailid, $password);  
    if ($user) {  
        // Registration Success  
       header("location:home.php");  
    } else {  
        // Registration Failed  
        echo $funObj2->error('Your EmailId / Password Not Match!!!');
    } 
 } else {
     echo $funObj2->warning('Please enter all the fields Carefully!!!');
   }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="style2.css">

    <title>Login Form!</title>
</head>

<body>
    <div id="login" class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4 css">
        <form name="login" method="post" action="">
            <h1>Log in</h1>
            <hr>
            <div class="form-group">
                <label for="emailsignup" data-icon="e"> Your email</label>
                <input class="form-control" id="emailsignup" name="emailid"  type="email"
                    placeholder="Abc@gmail.com" />
            </div>
            <div class="form-group">
                <label for="password" data-icon="p"> Your password </label>
                <input class="form-control" id="password" name="password" type="password"
                    placeholder="eg. Abc@1" />
            </div>
            <button type="submit" name="login" value="Login" class="btn btn-outline-primary bttn">Login</button>
            <p>
                Not a member yet ?
                <a href="index.php" class="to_register">Join us</a>
            </p>
        </form>
        <footer class="text-center" >
            <small>Copyright © <?php echo date("Y"); ?> Viku. All rights reserved.</small>
        </footer>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>