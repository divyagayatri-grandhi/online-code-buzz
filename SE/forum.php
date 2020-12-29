<html>
<head>
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
<form method="post" action="">

    <p><label>Username:</label> <input type="text" name="name" ></p>
    <p><label>Comments:</label> <textarea name="comments"></textarea></p>
    <p><input type="submit" value="Submit" name="submit"></p>

</form>

<?php
if(isset($_POST['submit'])) {

    $link = mysqli_connect("localhost", "root", "", "forum");

    $sql = sprintf("INSERT INTO details (username,comments) VALUES ('%s','%s')", $_POST['name'], $_POST['comments']);

    mysqli_query($link, $sql);
        echo "<p>'Records inserted successfully.'</p>";
        echo "<br>";
        echo "<br>";

    $result = mysqli_query($link, "select * from details ");
    foreach ($result as $row) {

        $value1 = $row["username"];
        $value2 = $row["comments"];
        echo "<p>". "<b>".$value1.": "."</b>".$value2."</p>";
        echo "<br>";
    }

    mysqli_close($link);
}
?>
</body>
</html>



