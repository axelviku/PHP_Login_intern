<?php
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