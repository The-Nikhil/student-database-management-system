<?php  
session_start();//session starts here  
 $_COOKIE['xyz']=$_SESSION['eno'];
?> <?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'sms'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$x=$_COOKIE['xyz'];
$sql='SELECT courseid from teachers where tid='.$x;
$run=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($run);
$sql = 'SELECT sid,firstname,lastname,email,reg_date,batch,courseid
		FROM students where courseid='.$row['courseid'];
			
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
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

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}</style>
<!--table style-->
<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
</style>
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
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sms';

// Create connection
$conn= new mysqli($servername, $username, $password, $dbname) or die("unable to connect");
?>

<h2 align="center">welcome,</h2>
<p align="center">List of batches you teach</p>
<!---------------------      name-->
<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">STUDENTS INFORMATION</caption>
		<thead>
			<tr>
				<th>Index</th>
				<th>sid</th>
				<th>firstname</th>
				<th>lastname</th>
				<th>email</th>
				
				<th>batch</th>
				<th>courseid</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['sid'].'</td>
					<td>'.$row['firstname'].'</td>
					<td>'.$row['lastname'].'</td>
					<<td>'.$row['email'].'</td>
					<td>'.$row['batch'].'</td>
					<td>'.$row['courseid'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		<tfoot>
			<tr>
				
				
			</tr>
		</tfoot>
	</table>

<form action="delete.php" method="post" align="center">
<font align="center" color="red"><br><b>ENTER enrollment no /sid of student to be deleted:</font><br>
<input type="number" name="sid"/>
<input name="Submit" type="submit" value="delete record" />
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
