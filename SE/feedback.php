<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="home.css" type="text/css"/>
    <style>
   
   ul {
       list-style-type: none;
       margin: 0;
       padding: 10;
       overflow:hidden ;
       background-color:rgb(128,128,128,0.5);
   }
li{
   float:left;
   align-self: auto;
 margin-left: 25px;
}
   

   li a {

       color: white;
       text-align: center;
       padding: 50px 56px;
       text-decoration: none;

   }

   li a:hover {
       background-color: white;
       color:black;
       font-weight:bold;

   }
   h3, p{
       text-align: center;
       padding-top:5px;

   }

</style>
<body>


<div class="column1">
 

</div>
<div class="column2">
   <div id="suji"> ONLINE CODE BUZZ!!! </div>
   <div id="suji1">You can learn . For free. For everyone. For ever</div>
</div><div class="column3">
</div>

<div class="column4">

   <ul>
      
       <li><a href="program.php" >Programs</a></li>
       <li><a href="search2.php" >Search</a></li>
       <li><a href="index1.php" >Code Competitions</a></li>
       <li><a href="forum.php" >Discussion forum</a></li>
       <li><a href="feedback.php" >Feedback</a></li>
       <li><a href ="sewelcome.html">Log out</a><li>

   </ul>

<form method="post" action="home_html.html">
    <fieldset>
    <label for="txtUserName">
        Username:</label>
    <input type="text" id="txtUserName"  name="txtUserName" />
        <h1>About the  course</h1>
        <h3> Was the course interesting ?</h3>
        <input type="radio" name ="course" value="yes" > yes
        <input type="radio"name ="course" value='no'> No
        <h3> Rate the difficulty level of course</h3>
        <input type="radio" name ="level" value="easy"> easy
        <input type="radio" name ="level" value='medium'>medium
        <input type="radio"name ="level" value='difficult'> difficult
        <h3>How did you come to know about the course ?</h3>
        <input type="radio" name ="know" value='college'> College
        <input type="radio"name ="know" value='Friends'>Friends
        <input type="radio" name ="know" value='Social media'>Social media
        <h3> Did the course fulfill your career growth ?</h3>
        <input type="radio" name ="career" value="yes" > yes
        <input type="radio"  name ="career" value='no'> No

        <h1>Disscussion Forum </h1>
        <h3>Was the forum active throughout the course</h3>
        <input type="radio"  name ="forum" value="yes" > yes
        <input type="radio"  name ="forum" value='no'> No
        <h3> Were the questions regarding the course answered promptly and satisfactorily</h3>
        <input type="radio"  name ="sat" value="yes" > yes
        <input type="radio"  name ="sat" value='no'> No

        <h1> Code Competitions</label></h1>
        <h3>Rate the level  of competitions</label> </h3>
        <input type="radio"  name ="comp" value="easy" >easy
        <input type="radio" name ="comp" value='medium'>medium
        <input type="radio"  name ="comp" value='difficult'> Difficult

        <h3>Any suggestions</h3>
    <textarea  name="suggestions"></textarea>
        <p> <input type="submit"  name="submit" value="submit"></p></fieldset>
</form>
</div>
<?php

if(isset($_POST['submit'])){
    $a=$_POST["txtUserName"];
    $b=$_POST['course'];
    $c=$_POST['level'];
    $d=$_POST['know'];
    $e=$_POST['career'];
    $f=$_POST['forum'];
    $g=$_POST['sat'];
    $h=$_POST['comp'];
    $i=$_POST['suggestions'];
    $db=mysqli_connect("localhost","root","","feedback");
    $sql=sprintf("insert into fb (name,interesting,difficulty_level,know_course,career_growth,forum_active,doubts_cleared,level_of_test,suggestions)values 
          ('%s','%s','%s','%s','%s','%s','%s','%s','%s')",$a,$b,$c,$d,$e,$f,$g,$h,$i);
    mysqli_query($db,$sql);
    mysqli_close($db);
    
}
?>
</body>
</html>