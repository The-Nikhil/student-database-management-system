<?php  
session_start();//session starts here  
  
?>  
<html>
<head><title>student login </title>
<style>
body {
    background-image: url("free-backgrounds-17.jpg");
    background-repeat: ;
 background-attachment: fixed;
background-size: 1000px 1000px;
text-color:white;
 
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
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=number], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
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
</style>
</head>
<body ><br><br><br><SECTION id="ABC"><H1 align="center"><br><font color="white"><B>STUDENT LOGIN</font></H1></SECTION><br><hr>
<br>

<br><br><br>
<div>
  <form action="student_login.php" method="post"><br>
   
<br><br>

    <label for="enrollmentno">enrollment_no</label>
    <input type="number" name="eno"  placeholder="enter your enrollment no.">
  <label for="dob">DOB</label>
  <input type="date" name="bday" >
  <label for="password">password</label>
  <input type="password" name="pass" >
    <input type="submit" value="login" name="login">
  </form>
</div>

</section></body>
</html>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sms';

// Create connection
$conn= new mysqli($servername, $username, $password, $dbname) or die("unable to connect");
?>
<?php
if(isset($_POST['login']))  
{  
    $user_eno=$_POST['eno']; 
   
    $user_pass=$_POST['pass'];  
    
  
    $check_user="select * from students WHERE sid='$user_eno'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($conn,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome_student.php','_self')</script>";  
  
        $_SESSION['eno']=$user_eno;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('id or password is incorrect!')</script>";  
    }  
}  
?> 