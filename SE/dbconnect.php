<?php
//inclue_once copy the code from another file and it ignores error without check
class dbConnect
{
    function __construct()
    {
        require_once('config.php');
        $conn = mysqli_connect(HOST, USER, PASSWORD,DATABASE);
      //  mysqli_select_db(DATABASE,$conn);
        if(!$conn)
        {
            die("Cannot connect to the data base");
        }  
        return $conn;
    }

}
?>