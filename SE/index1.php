
<!DOCTYPE>
<html>
<?php require 'dbconfig.php';
session_start(); ?>
<head>
<title> Quiz</title>
<style>
body {
    background: url("download.jpg");
	background-size:100%;
	background-repeat: no-repeat;
	position: relative;
	background-attachment: fixed;
}
/* button */
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: navy;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 500px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
 
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
 
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
 
.button:hover span {
  padding-right: 25px;
}
 
.button:hover span:after {
  opacity: 1;
  right: 0;
}
.title{

  color:white;
  float:left;
	
}.p{
  float:left;
}
.button3 {
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f4e542;
}
 
.button3:hover {
    background-color: #f4e542;
    color: Black;
}
.h3{
  color:white;
}
.button4{
  display: inline-block;
  border-radius: 4px;
  background-color: navy;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 500px;
  margin-top:300px;
  margin-left:400px;
}

.variablecolor{
color: blue;}
</style>
</head>
<body>



<?php 															
	if (isset($_POST['click']) || isset($_GET['start'])) {
		@$_SESSION['clicks'] += 1 ;
			$c = $_SESSION['clicks'];
			if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
																
				$fetchqry2 = "UPDATE `quiz` SET `userans`='$userselected' WHERE `id`=$c-1"; 
				$result2 = mysqli_query($con,$fetchqry2);
				}
		  
																	
 			} else {
				$_SESSION['clicks'] = 0;
				}
		
      ?>
      
      
<div class="bump">

</div>
  <br><form><?php if($_SESSION['clicks']==0){ ?><div class="title">
      <h2>INSTRUCTIONS</h2>
        <p>1.The quizzes consists of questions carefully designed to help you self-assess your comprehension of the information presented on the topics covered in the module.</p>

<p>2.Each question in the quiz is of multiple-choice or "true or false" format.</p> 

<p>3.After responding to a question, click on the "Next " button at the bottom to go to the next question.</p>

<p>4.The total score for the quiz is based on your responses to all questions.</p>  <center><button class="button" name="start" float="left"  style="margin-top:300px"<span>START QUIZ</span></button></center> <?php } ?></form></div>
<form action="" method="post">  				
<table><?php if(isset($c)) {   $fetchqry = "SELECT * FROM `quiz` where id='$c'";
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC); }
		  ?>
<tr><td><h3><br><?php echo "<font color=ghostwhite>" . @$row['que']."</font>"?></h3></td></tr> <?php if($_SESSION['clicks'] > 0 && $_SESSION['clicks']<12 ){ ?>
  <tr><td style="color:pink"><input required type="radio" name="userans"   value="<?php echo $row['option1'];?>">&nbsp;<?php echo $row['option1']; ?><br>
  <tr><td style="color:pink"><input required type="radio" name="userans" value="<?php echo $row['option2'];?>">&nbsp;<?php echo $row['option2'];?></td></tr>
  <tr><td style="color:pink"><input required type="radio" name="userans" value="<?php echo $row['option3'];?>">&nbsp;<?php echo $row['option3']; ?></td></tr>
  <tr><td style="color:pink"><input required type="radio" name="userans" value="<?php echo $row['option4'];?>">&nbsp;<?php echo $row['option4']; ?><br><br><br></td></tr>
  <tr><td><button class="button3" name="click" >Next</button></td></tr> <?php }  
																	?> 
  <form>
 <?php if($_SESSION['clicks']>11){ 
	$qry3 = "SELECT `ans`, `userans` FROM `quiz`;";
	$result3 = mysqli_query($con,$qry3);
	$storeArray = Array();
	while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
     if($row3['ans']==$row3['userans']){
		 @$_SESSION['score'] += 1 ;
	 }
}

 
 ?> 
 
 <center>

 
 <h1 style="color:white;">Result</h1>
<h2> <span style="color:white;">No. of Correct Answer:&nbsp;<?php echo $no = @$_SESSION['score']; 
 session_unset(); ?></span><br>
 <span style="color:white;">Your Score:&nbsp<?php echo $no*1; ?></span></h2></center>
 <a href="home_html.html" class="button4">BACK TO HOME PAGE</a>
  


<?php } ?>
