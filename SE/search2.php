<!DOCTYPE html>
<html>
<head>
  <title>Programs</title>
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
    .searching{
      position: absolute;
      top: 40%;
      color: white;

    font-family: cursive;
    font-size: 30px;
    }

</style>
</head>
<body>
<div class="column2">
    <div id="suji"> ONLINE CODE BUZZ!!! </div>
    <div id="suji1">You can learn . For free. For everyone. For ever</div>
</div>
<div class="column3">
</div>

<div class="column4">

    <ul>
       
        <li><a href="show.php" >Programs</a></li>
        <li><a href="search2.php" >Search</a></li>
        <li><a href="index1.php" >Code Competitions</a></li>
        <li><a href="forum.php" >Discussion forum</a></li>
        <li><a href="feedback.php" >Feedback</a></li>
        <li><a href ="sewelcome.html">Log out</a></li>

    </ul>
</div>

<div class="searching">

<form action="" method="post">
    <input type="text" name="search" placeholder="Search Programs">
    <input type="submit" value=">>" name="">
  </form>



<div class="display_box" position: relative;
top: 150px; >

<?php
$db = mysqli_connect("localhost", "root", "", "coding");

  if(isset($_POST['search'])){
    $searchq=$_POST['search'];

  $result = mysqli_query($db, "SELECT * FROM code WHERE prgrm LIKE '%$searchq%'");
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";

        echo "<p>".$row['prgrm']."</p>";
        ?>
        
        <a href="images/<?php echo $row['title'] ?>" target="_blank" style="color:white">View Code</a></h4>
    
        <?php
      echo "</div>";
    }
}
    
  ?>
</div>
</div>
  </body>
</html>