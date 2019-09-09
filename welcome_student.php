<?php  
session_start();//session starts here  
  
?> <!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
<!--sidebar-->
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    text-align:center;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}

.sidenav a:hover{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body bgcolor=#f2f2f2>
<?php 

     
	if(!isset($_SESSION['eno']))
	{ header('location:login.php');
}
?>

<ul>
 <span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776; open</span>
  <li><a href="logout.php">logout</a></li>
 
</ul>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">ABOUT</a>
  <a href="#">MY SUBJECTS</a>
  <a href="#">more info</a>
  <a href="#">settings</a>
</div>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sms';

// Create connection
$conn= new mysqli($servername, $username, $password, $dbname) or die("unable to connect");
?>

<h1 align="center">WELCOME</h1>
<hr width="30%">

<!---------------------      name

----------------------------->
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>
