<?php  
//require_once 'dbConnect.php';  
session_start();  
    class dbFunction {  
            
        public $conn;
        function __construct() {  
              
            // connecting to database  
            //$db = new dbConnect();  
               
            define('DB_SERVER', 'localhost');
            define('DB_USERNAME', 'root');
            define('DB_PASSWORD', '');
            define('DB_NAME', 'arya');
           
           // Try connecting to the Database
           $this->conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
         
        } 
        // destructor  
        function __destruct() {  
              
        }  
        public function UserRegister($username, $emailid, $password){  
                $password = md5($password);  
                $qr = mysqli_query($this->conn,"INSERT INTO users(username, emailid, password) values('".$username."','".$emailid."','".$password."')") or die(mysql_error());  
                return $qr;  
               
        }  
        public function Login($emailid, $password){  
            $res = mysqli_query($this->conn,"SELECT * FROM users WHERE emailid = '".$emailid."' AND password = '".md5($password)."'");  
            $user_data = mysqli_fetch_array($res);  
            //print_r($user_data);  
            $no_rows = mysqli_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
           
                $_SESSION['login'] = true;  
                $_SESSION['uid'] = $user_data['id'];  
                $_SESSION['username'] = $user_data['username'];  
                $_SESSION['email'] = $user_data['emailid'];  
                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
        }  
        public function isUserExist($emailid){  

           
            $qr = mysqli_query($this->conn,"SELECT * FROM users WHERE emailid = '".$emailid."'");  
            $row = mysqli_num_rows($qr);  
            
            if($row > 0){  
                return true;  
            } else {  
                return false;  
            }  
        }  
    }  
?>  