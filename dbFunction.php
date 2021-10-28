<?php  
//require_once 'dbConnect.php';  
session_start();  
    class dbFunction {  
            
        public $conn;
        function __construct() {  
            //$db = new dbConnect(); 
            //That include the db part  
            include 'config.php';    
           // Try connecting to the Database
           $this->conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
         
        }  
              
        public function UserRegister($username, $emailid, $password, $phonenum){  
                $password = md5($password);  
                $qr = mysqli_query($this->conn,"INSERT INTO users(username, emailid, password, number) values('".$username."','".$emailid."','".$password."','".$phonenum."')") or die(mysql_error());  
                return $qr;  
               
        }  
        public function validating($phonenum){
                    $valid_number = filter_var($phonenum, FILTER_SANITIZE_NUMBER_INT);
                    $valid_number = str_replace("-", "", $valid_number);
                    $valid_number = str_replace("+", "", $valid_number);
                    if (strlen($valid_number) < 10 || strlen($valid_number) >= 12) 
                    {
                      return false;
                    } else 
                    {
                     return true;
                    }
            }
        public function pass_Check($password){
            $passLenght = 5;
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
            
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < $passLenght) {
                 return false;
            }else{
                return true;
            }
        }
        public function Login($emailid, $password){  
            $res = mysqli_query($this->conn,"SELECT * FROM users WHERE emailid = '".$emailid."' AND password = '".md5($password)."'");  
            $user_data = mysqli_fetch_array($res);  
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
    
    class general{
        public function emptyField($username,$password,$emailid,$phonenum){
            if(strlen(!$username || !$emailid || !$password || !$phonenum) == 0){
                return true;
            }else{
                return false;
            }

        }
    }
?>  