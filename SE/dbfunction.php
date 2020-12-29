<?php
require_once('dbconnect.php');
session_start();
    class dbFunction{
        function __construct1()
        {
         //connect to database
            //$db1 = new dbConnect();
        }
    public function UserRegister($username, $emailid, $password)
    {
        require_once('config.php');
        $conn = mysqli_connect(HOST, USER, PASSWORD,DATABASE);
        $password =($password);
        $qr = mysqli_query($conn,"INSERT INTO users (username, emailid, password) values('".$username."','".$emailid."','".$password."')")or die(mysqli_error($conn));
        return $qr;
    }
    public function Login($emailid, $password)
    {
        require_once('config.php');
        $conn = mysqli_connect(HOST, USER, PASSWORD,DATABASE);
        $password =($password);
        $res = mysqli_query($conn,"SELECT * FROM users WHERE emailid= '".$emailid."' AND password ='".($password)."'");
        $user_data = mysqli_fetch_array($res);
        //print_r($userdata);
        $no_rows = mysqli_num_rows($res);
         if ($no_rows == 1)
         {
             $_SESSION['login'] = true;
             $_SESSION['uid'] = $user_data['id'];
             $_SESSION['username']=$user_data['username'];
             $_SESSION['emailid']=$user_data['emailid'];
             return TRUE;
         }
         else
         {
             return FALSE;
         }

    }
    public function isUserExist($emailid)
    {
        require_once('config.php');
        $conn = mysqli_connect(HOST, USER,PASSWORD,DATABASE);
        //$password =($password);
        $que="SELECT * FROM users WHERE emailid ='".$emailid."'";
        $qr = mysqli_query($conn,$que);   
        $row = mysqli_num_rows($qr);
        if ($row > 0){
            return true;
        }
        else{
            return false;
        }
    }
}
?>