<?php  
    class dbConnect {  
        function __construct() {  
            //require_once('config.php');  
           // $conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);  
           // mysql_select_db(DB_DATABSE, $conn);  
           // if(!$conn)// testing the connection  
           // {  
               // die ("Cannot connect to the database");  
           // }   
           // return $conn;  
     //   }  
      //  public function Close(){  
          //  mysql_close();  
          
 define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', '');
 define('DB_NAME', 'arya');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
    // private $host = "localhost"; // your host name  
    // private $username = "root"; // your user name  
    // private $password = ""; // your password  
    // private $db = "arya"; // your database name  
    // public  
    // function __construct()  
    // {  
    //     mysql_connect($this - > host, $this - > username, $this - > password) or die(mysql_error("database"));  
    //     mysql_select_db($this - > db) or die(mysql_error("database"));  
    // } 
        }  
    }  
?>

