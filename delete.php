<?php  
session_start();//session starts here  

   $servername= 'localhost';
   $username= 'root';
   $password= '';
  $dbname= 'sms';

// Create connection
$conn= new mysqli($servername, $username, $password, $dbname) or die("unable to connect");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

$id=$_POST['sid'];
$query = "DELETE FROM students where sid = '".$id."'";

if(mysqli_query($conn,$query)){
echo "deleted";}
else{
echo "fail";}
?>

<html>
<body>
<p><<------</P>
<a href="wf.php" color="red">Go back</a>
</body>
</html>