<?php
$link=mysqli_connect("localhost","root","","coding");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Programs</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	 <link rel="stylesheet" href="home.css" type="text/css"/>
	 <style>
	 	.deleting-box{
      position: absolute;
      top: 50%;
      left:35%;
      color: white;
      background: rgba(0,0,0,0.5);
    font-family: cursive;
    font-size: 20px;
    border-radius: 5px;
    width: 500px;
    height: 250px;
    }
   
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
		h4{
			font-weight: bold;
			font-size: 30px;
		}
	</style>
</head>
<body>
<div class="column2">
    <div id="suji"> ONLINE CODE BUZZ!!! </div>
    <div id="suji1">You can learn . For free. For everyone. For ever</div>
</div>

<div class="column4">

    <ul>
       
        <li><a href="show.php" >Programs</a></li>
        <li><a href="search.php" >Search</a></li>
        <li><a href="compt.html" >Code Competitions</a></li>
        <li><a href="forum.php" >Discussion forum</a></li>
        <li><a href="feedback.php" >Feedback</a></li>
        <li><a href ="#">Log out</a></li>

    </ul>
</div>
<div class="deleting-box">
	<center>
	<form name="form1" action="" method="post">

		<select name="code">
			<?php
			$res= mysqli_query($link,"select * from code");
			while ($row=mysqli_fetch_array($res)) {
				?>
				<option><?php echo $row["prgrm"]; ?></option>
				<?php
			}
			?>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>
</center>

	<?php
	if(isset($_POST['code'])) 
	{
		$getcode=$_POST['code'];
		echo "You are deleting  ".$getcode."program";
		$sql='DELETE FROM code where prgrm="'.$getcode.'";';
		$result=mysqli_query($link,$sql);?>

<br>	<h4>
		 <?php echo  "Successfully deleted";?> </h4>
		 <?php
				
		
			
		}
	?>
	</div>





</body>
</html>
