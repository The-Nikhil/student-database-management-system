<?php  
session_start();//session starts here  
$_COOKIE['abc'] = $_SESSION['eno']; 

?>
<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'sms'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
$var_val=$_COOKIE['abc'];
$sql = 'SELECT tid,firstname,lastname,sub,courseid
		FROM teachers where tid='.$var_val
			;
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
$row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
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
#p1 {
    border-left: 10px solid red;
    background-color: 	#FFFFFF;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}</style>


</head>
<body bgcolor=#f2f2f2>
<!--   -->
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
  <a href="wf.php">students</a>
  <a href="batch.php">batches</a>
  <a href="moreinfo.php">more info</a>
  <a href="settings.php">settings</a>
</div>


<h1 align="center"><b>welcome user</h1>
<h2 align="center">Here is your personal information!</h2>
<hr width="30%">
<br><br>
<p id="p1">tid</p>
<?php
echo $row['tid'];
?>
<p id="p1">FIRST_NAME</p>
<?php
echo $row['firstname'];
?>
<p id="p1">LAST_NAME</p>
<?php
echo $row['lastname'];
?>
<p id="p1">SUB</p>
<?php
echo $row['sub'];
?>
<p id="p1">COURSE_ID</p>
<?php
echo $row['courseid'];
?>
<form action="update.php" method="post" align="center">
<input type="submit" name="pass" value="change login password">
<input type="submit" name="submit" value="update info" >
</form>
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
