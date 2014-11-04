<?php 
include('includes/config.php');
$collect='';
if($_POST){
$collect = login($_POST);
if($collect == 'you have successfully login'){
header("location: choose_election.php");
exit;}
}
 ?>


<html >

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING REGISTRATION SYSTEM||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="design.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 16px;
}
.style7 {font-size: 16px; font-weight: bold; }
.style8 {color: #000000; font-weight: bold; font-size: 18px; }
.style3 {	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="header">
  <img src="images/logo1.jpg" alt="Vote" width="" height="" style="paddimg:0px" />
</div><br><br>
<div id="menu">
	<ul>
		<li> <a href="index.php"> |  Home  |</a></li>
		<li>
		  <a href="login.php">|  Voting  |</a></li>
		<li>
		  <a href="pres_result.php">|  Result  |</a></li>
		<li>
		  <a href="login.php" >|  Login  |</a></li>
		<li>
		  <a href="contact.php">|  Contact Us  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
</div>
</div>
<div id="footer">
 
	<table width="371" height="177" border="1" style="border-spacing:0px" align="center" bgcolor="white">
      <tr>
        <td width="361" height="32"><table width="200" align="center" bgcolor="white">
            <tr>
              <td height="29"><div align="center"><span >LOGIN CONSOLE </span></div></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td height="130"><form id="form1" method="post" action="">
            <table width="313" align="center">
              <tr>
                <td width="96"><span class="style3">User Name</span></td>
                <td width="205"><label>
                  <input type="text" name="txtusername" />
                </label></td>
              </tr>
              <tr>
                <td height="30"><span class="style3">Password</span></td>
                <td><input type="password" name="txtpassword" /></td>
              </tr>
              <tr>
                <td height="41"><label>
                  <input type="submit" name="Submit" value="Submit" />
                </label></td>
                <td><input type="reset" name="Submit2" value="Reset" /></td>
              </tr>
            </table>
        </form></td>
      </tr>
    </table>
	<p>&nbsp;</p>
	
</div>
</body>
</html>
