<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin:0;
    padding: 0;
    overflow: hidden;
    background-color:#001f3f;
}

li {
    float: left;
}
#p{
color:white;
font-size:60px;
}
li a {
    display: block;
    color:white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  
}


}
<!-- styling        for      the        polaroids        start      -->
.container {
    position: relative;
    width: 50%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}

.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
div.polaroid {
  width: 20%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-left:25px;
  position:absolute;
}
div.polaroid1 {
  width: 20%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-left:500px;
  position:absolute;
}
div.polaroid2 {
  width: 20%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
  margin-left:925px;
  position:absolute;
}
div.container {
  text-align: center;
  padding: 10px 20px;
}

<!--styling   polaroids end-->

</style>
</head>
<body bgcolor="#fff">

<br><hr>
<!--NAVIGATION BAR START-->
<nav class="navigantion-bar">

<ul>
<li> &nbsp;<img src="JIIT-Noida-Logo.png" height=200% width=100% , hspace="20">&nbsp;&nbsp;&nbsp;</a></li>
  
<li><p id="p">&nbsp;&nbsp;&nbsp;&nbsp; Jaypee institute of information techology<br>&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sector 128</p>&nbsp;&nbsp;<hr  align="center" width=40%></li>
</ul>
</nav>
<!-- NAVIGATION BAR END-->
<BR><hr>

<marquee><font color="red" >WELCOME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
 In case of any querry contact us at jiit128help@gmail.com</font></marquee><hr>
<!--POLAROIDS-->
<!--faculty-->
<div class="polaroid">
<div class="container">
  <img src="img_avatar3.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <a href="faculty_login.php" ><div class="text">FACULTY LOGIN</div></a>
  </div><a href="faculty_login.php" ><B><p>FACULTY LOGIN</p></a>
</div>
</div>
 <!--student-->
<div class="polaroid1">
<div class="container">
  <img src="img_avatar3.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <a href="student_login.php" ><div class="text">STUDENT</div></a>
  </div><a href="student_login.php" ><B><p>STUDENT</p></a>
</div>
 </div>
<!--admin-->
<div class="polaroid2">
<div class="container">
  <img src="img_avatar3.png" alt="Avatar" class="image" style="width:100%">
  <div class="middle">
    <a href="admin_login.php" ><div class="text">ADMIN</div></a>
  </div><a href="admin.php" ><B><p>ADMIN</p></a>
</div>
 </div>
<POLAROIDS END-->
<br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<hr align="center" width=60%>
<p align="center">Jaypee Institute of Information Technology, Noida was established in the year 2001 and has been declared as a �Deemed to be University� under Section 3 of UGC Act 1956 in the year 2004.
<br>
JIIT's state-of-the-art, environmentally conditioned campus comprises smart buildings with Wi-Fi connectivity covering the Academic Block, Business School Faculty Residences, Student Hostels and Annapurna.</p>
<br>
<br><p align="center"><b>ADDRESS :  A-10, Sector-62, ,Noida-201 309, 
Uttar Pradesh, India.
<br><b>CONTACT :  24X7 Helpline No 
1-911-2024-00973
<br><b>WEBSITE :  
webadmin@jiit.ac.in</p>
</body>
</html>
