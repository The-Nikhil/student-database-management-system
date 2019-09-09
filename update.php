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



if(mysqli_query($conn,$query)){
echo "deleted";}
else{
echo "fail";}
?>

<html><head><style>
body {
    background-image: url("");
    background-repeat: ;
 background-attachment: fixed;
background-size: 1000px 1000px;
text-color:white;
background-color:black;
 
}
#fcolor
{ color:white;
}
 #ABC {
      background-color: #17202A  ;
      height: 15%;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
    }

<!--form styling-->

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style></head>
<body>
<h1 align="center" id="fcolor"><b>CHANGE PASSWORD</h1>
<p style="color:white;"><<------</P>
<a href="settings.php" text-color="red"><p style="color:red;"><b>Go back</p></a>
<div>
  <form action="update.php" method="post" align="center"><br>
   
<br><br>
<label for="tid"><b>Tid:</label>
<input type="number" name="tid">
<br><br>
    <label for="pass">OLD PASSWORD:</label>
    <input type="password" name="pass1"  placeholder="old password">
  <br><br>
  <label for="newpassword">NEW PASSWORD:</label>
  <input type="password" name="pass2" >
<br><br>
    <input type="submit" value="submit" name="change">
  </form>
</div>
<?php
$id=$_POST['tid'];
$old_pass=$_POST['pass1'];
$new_pass=$_POST['pass2'];
$sql=mysqli_query($conn,"UPDATE teachers SET user_pass='$new_pass' WHERE tid='$id' AND user_pass='$old_pass'");

?>
</body>
</html>