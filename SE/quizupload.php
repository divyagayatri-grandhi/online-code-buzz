<!DOCTYPE html PUBLIC "-
//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="home.css" type="text/css"/>
<title>QUIZ</title>
<style>
body {
background-image: url('download.jpg') ;
background-repeat: no-repeat;
background-attachment: fixed;
background-size:100% 100%;
}
.buy-form{

max-width: 350px;
margin:auto;
border-radius: 5px;
justify-content: center;
align-items: center;
background:rgb(225,225,225,0.5);
padding:40px;
}
input[type=text]{
    padding: 12px 20px;
  margin: 8px 0; 
width:100%;
display:inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}

input[type=submit]{
width:100%;
background: rgb(120,120,120);
color:white;
padding:14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type=submit]:hover{
background: white;
color:black;
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
</head>
<body>
<center>
<h2 class="italic" style="color:lightpink;margin-
top:100px;"><b>UPLOAD QUIZ QUESTIONS</b></h2></center><br>
<div class="buy-form">
<form action="quizupdb.php" method="POST">

<input type="text" name="id" required="required" placeholder="Enter Question No"><br><br>

<input type="text" name="que" required="required" placeholder="Enter Question Here"><br><br>

<input type="text" name="option1" required="required" placeholder="Enter First Option"><br><br>

<input type="text" name="option2" required="required" placeholder="Enter Second Option"><br><br>

<input type="text" name="option3" required="required" placeholder="Enter Third Option"><br><br>

<input type="text" name="option4" required="required" placeholder="Enter Fourth Option"><br><br>

<input type="text" name="ans" required="required" placeholder="Correct Answer"><br><br>

<input type="text" name="userans" required="required" placeholder="Random User Answer"><br><br>
<input type="submit" value="CONFIRM" />
</form>
</div>
</body>
</html>
