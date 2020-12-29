<?php
   $id=$_POST['id'];
   $que=$_POST['que'];
   $option1=$_POST['option1'];
   $option2=$_POST['option2'];
   $option3=$_POST['option3'];
   $option4=$_POST['option4'];
   $ans=$_POST['ans'];
   $userans=$_POST['userans'];

   if(!empty($id) || !empty($que) ||!empty($option1) ||!empty($option2)||!empty($option3)||!empty($option4)||!empty($ans)||!empty($userans))
   {
     $con=mysqli_connect("localhost","root","","SE");
     $q="INSERT INTO quiz(ID,QUE,OPTION1,OPTION2,OPTION3,OPTION4,ANS,USERANS) VALUES('$id','$que','$option1','$option2','$option3','$option4','$ans','$userans')" or die(mysqli_error($con));
     mysqli_query($con,$q);
     echo "<script> alert('Success')</script>";     
   }
   else
   {
       echo "All fields are required!";
   }
  ?>
