<!DOCTYPE html>
<html>
<head>
<body style="background-color:white;font-family: sans-serif;background-image:url('download.jpg');background-repeat:no-repeat;background-size:100%;" >
    
    <form name="login"  method="post" action="login.php">
        
    <h1 style="text-align: center;color:white;">Registration Form</h1>
    <table style="width: 40%;" align="center">
                    <tr>
                    <td>
                        <p style="text-align: left;font-size:20px;font-weight:bold;color:white;">
                        <label > Username</label></td>
                    <td>  
                        <input style="padding: 8px 15px" type="text" required="required" name="username" placeholder="Enter username">
                    </p></td>
                    <br>
                    </tr>
                    <tr>
                    <td>
                        <p style="text-align: left;font-size:20px;font-weight:bold;color:white;">
                        <label > E-mail</label></td>
                    <td>
                        <input style="padding: 8px 15px" type="mail" required="required" name="emailid" placeholder="Enter your email id">
                    </p></td><br>
                    </tr>
                    <tr>
                    <td>
                        <p style="text-align: left;font-size:20px;font-weight:bold;color:white;">
                        <label > Password</label></td>
                    <td>
                        <input style="padding: 8px 15px" type="password" required="required" name="password" placeholder="Enter your password">
                    </p></td><br>
                    </tr>
                    <td>
                        <p style="text-align: left;font-size:20px;font-weight:bold;color:white;">
                        <label > Confirm Password</label></td>
                    <td>
                        <input style="padding: 8px 15px" type="password" required="required" name="confirm_password" placeholder="Enter your password">
                    </p></td><br>
                    </tr>
                </table>
    <p style="text-align:center;">
        <input style="padding : 8px 15px; cursor:pointer; border:0px;background-color:navy;color:white" type="submit" name="register" value="Register Now">
    </p>
    <p style="text-align:center;color:pink;">
        Already Member?
        <a href="login.php" style ="color:ghostwhite;">Login here</a>
    </p>
    </form>
</body>
</head>
</html>