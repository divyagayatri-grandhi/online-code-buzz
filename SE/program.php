<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "coding");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['title']);

  	// image file directory
  	$target = "images/".basename($image);
    $title= $_POST['title'];

  	$sql = "INSERT INTO code (title, prgrm) VALUES ('$image', '$title')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM code");
?>
<!DOCTYPE html>
<html>
<head>
<title>Programs Upload</title>
 <link rel="stylesheet" href="home.css" type="text/css"/>
<style type="text/css">
   #content{
    margin-top: 50%;
    position: absolute;
    top:250px;
    left: 400px;
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
    background-repeat: no-repeat;
    background:rgb(128,128,128,0.5);
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 3px;
   	margin: 15px auto;
    font-color:white;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 100px;
   	height: 75px;
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
  margin-left: 150px;
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
        color: white;
        size: 30px;

    }

</style>
</head>
<body>


<div class="column1">
  

</div>
<div class="column2">
    <div id="suji"> ONLINE CODE BUZZ!!! </div>
    <div id="suji1">You can learn . For free. For everyone. For ever</div>
</div>
<div class="column3">
</div>

<div class="column4">

    <ul>
       
    <li><a href="program.php" >UPLOAD PROGRAM</a></li>
        <li><a href="quizupload.php" >UPLOAD QUIZ</a></li>
              <li><a href ="sewelcome.html">LOG OUT</a></li>

    </ul>
</div>
<div id="content">
  <?php
  if(isset($_POST['view'])){
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	?>
        <h4>
        <a href="images/<?php echo $row['title'] ?>" target="_blank" style="color: white">View Code</a></h4>
        <h3>
        <?php
      	echo "<p>".$row['prgrm']."</p>";
      echo "</div>";
    }
    }
  ?></h3>
  <form method="POST" action="" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="title" 
      	placeholder="Say something about this code..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
      <button type="submit" name="view">VIEW</button>

  	</div>
  </form>
</div>
</body>
</html>
