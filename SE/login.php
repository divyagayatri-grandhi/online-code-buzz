<?php
    include_once('dbfunction.php');
    $funObj = new dbFunction();
    if(isset($_POST['login'])){
        $emailid=$_POST['emailid'];
      
        $password=$_POST['password'];
        $user = $funObj->Login($emailid, $password);
        if($user){
            // Registration success
            setcookie('emailid',$emailid,time()*60*60*7);
            session_start();
            $_SESSION['emailid']=$emailid;
            header("location:home_html.html");

        }else{
            //Registeration failed
            echo "<script>alert('Email-id/Password Not Match')</script>";

        }

    }
    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $emailid=$_POST['emailid'];
        $password=$_POST['password'];
        $confirmpassword=$_POST['confirm_password'];
        if($password == $confirmpassword){
        $emailid1= $funObj->isUserExist($emailid);
            if(!$emailid1)
            {
                $register = $funObj->UserRegister($username,$emailid,$password);
                if($register){
                    echo "<script>alert('Registration Successfull')</script>";
                }
                else
                {
                    echo "<script>alert('Registration Not Successfull')</script>";
                }
            }
            else
            {
                echo "<script>alert('Password does not match')</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<body style="background-color:white;font-family: sans-serif;background-image:url('download.jpg');background-repeat:no-repeat;background-size:100%;" >
    <h1 style="text-align: center;color:white;">Login</h1>
    <form name="login" method="POST" action="" onsubmit="setAction()">
        
    
    <table style="width: 40%;" align="center">
                    <tr>
                    <td>
                        <p style="text-align: left;font-size:20px;font-weight:bold ;color:white;">
                        <label > E-mail</label></td>
                    <td>
                        <input style="padding: 8px 15px; " type="mail" required="required" name="emailid" placeholder="Enter your email id">
                    </p></td><br>
                    </tr>
                    <tr>
                    <td>

                    <i class="fas fa-envelope"></i>

                        <p style="text-align: left;font-size:20px;font-weight:bold;color:white;">
                      
                        <label > Password</label></td>
                    <td>
                        <input style="padding: 8px 15px" type="password" required="required" name="password" placeholder="Enter your password">
                    </p></td><br>
                    
                </table>
    <p style="text-align:center;">
        <input style="padding : 8px 15px; cursor:pointer; border:0px;background-color:navy;color:white" type="submit" name="login" value="Login" >
    </p>
    <p style="text-align:center;color :pink;">
        No Account Yet?
        <a href="register.php"style="color:white;">Sign Up here</a>
    </p>
    </form>
   
</body>
</head>
</html>