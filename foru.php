<html>
<!-- 
we can write comments here to each other
-->
<?php 
session_start();
?>
  <head>
  <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="djduuu7.png">
  <style>
  body{
    text-align:center;
    font-family:Darker Grotesque, sans-serif;
    font-size:20px;
  }
  #button{
    padding:5px;
    background-color:transparent;
    border:none;
    font-size: 25px;
    font-family:Darker Grotesque;
  }
p{
  font-size:30px;
}
label{
  padding:4px;
}
ul {box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  list-style-type: none;
  margin: -10px;
  overflow: hidden;
  color:#949494;
  background-color:  #000000;
  position:relative;
  opacity:1;
  padding:1%;
}

li {
  float: left;
}

li a {
  position:relative;
  display: block;
  text-align: center;
  color:#949494;
  padding: 14px ;
  text-decoration: none;
}

li a:hover {
  color: #ffffff;
}
div{
  position:relative;
  right:-200px;
}
#qwerty{
  position:absolute;
  height:45%;
  width:3%;
  padding:0.5%;
  left:10%;
  opacity:0.7;

}
#qwerty:hover{
  opacity:1;
}
p{
  position:absolute;
  left:50%;
  top:90%;
  color:white;
  padding:0;
}
#userrr{
  margin-left:400px;
}
#words{
  position:static;
  margin-left:200px;
  margin-right:200px;
  color:black;
}
  </style>
    <title>DJDU BOOK OFFICIAL WEBSITE</title>
  </head>
  <body>

<ul>
<a href="index.php"><img src="djduuu7.png" id='qwerty'></img></a>
<div>
  <li><a href="excerpts.php">Excerpts</a></li>
    <?php 
    if( $_COOKIE['user']!=''){
      echo "<li><a href=\"signout.php\">Log Out</a></li>";
    }
    else{
       echo "<li><a href=\"signup.php\">Sign up</a></li>
  <li><a href=\"login.php\">Login</a></li>";
    }
    ?>
  <li><a href="forum.php">Forum</a></li>
  <li><a href="about.php">About us</a></li>
  <li><a href="art.php">Art</a></li>
  <li><a href="contactus.php">Contact us</a></li>
  </div>
   <?php
echo "<li id='userrr'><a href=\"welcome.php\">",$_COOKIE['user'],"</a></li>";?>
</ul>
<?php 
$_SESSION['incorrect']='';
?>
  </body>
</html>
</span>
<br/><br/><br/><br/><br/>
<?php
echo '<p id=\'words\'>'.$_POST['fullmessage'].'</p>';
?>