<?php   
    include_once('dbFunction.php');  
    if(!empty($_POST['welcome'])){  
        // remove all session variables  
        session_unset();   
  
        // destroy the session   
        session_destroy();  
    }  
    if(!($_SESSION)){  
        header("Location:index.php");  
    }  
?>  
<!DOCTYPE html>  
 <html lang="en" class="no-js">  
 <head>  
        <meta charset="UTF-8" />  
        <title>Login and Registration Form. </title>  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <meta name="description" content="Login and Registration Form" />  
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />  
        <meta name="author" content="Codrops" />  
        <link rel="shortcut icon" href="../favicon.ico">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    </head>  
    <body>  
        <div class="container text-center">   
            <section>               
                <div id="container_demo" >  
                    <div id="wrapper">  
                        <div id="login" class="animate form">  
                           <form name="login" method="post" action="">  
                                <h1>Welcome </h1>                    
                                <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Your Name - <?=$_SESSION['username']?> </h4>
                                <h5 class="alert-heading">Your Email - <?=$_SESSION['email']?> </h5>
                                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                <hr>
                                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                </div>

                                   
                                <p class="login button">   
                                    <input type="submit" name="welcome" value="Logout" />   
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