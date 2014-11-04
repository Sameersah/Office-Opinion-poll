<?php
// Check if session is not registered , redirect back to main page.
// Put this code in first line of web page.
session_start();
//if(!session_is_registered('txtusername')){
//header("location:login.php");
//}
?>

<?php
if(isset($_POST['Submit'])) {
header("location:districta.php");
}
if(isset($_POST['Submit2'])) {
header("location:districta.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| CHOOSE ELECTION SYSTEM ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="design.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-size: 16px;
}
.style8 {color: #0000FF; font-weight: bold; font-size: 16px; }
-->
</style>
</head>
<body>
<div id="header">
 <img src="images/logo1.jpg" alt="Vote" width="" height="" style="paddimg:0px" /> 
</div>
<br><br>
<div id="menu">
	<ul>
		<li> <a href="index.php"> |  Home  |</a></li>
		
		<li>
		  <a href="registration.php">|  Registration  |</a></li>
		<li>
		  <a href="logout.php">|  Logout  |</a></li>
		  <a href="contact.php">|  Contact Us  |</a></li>
	</ul>
</div>
<div id="content">
  <div id="left">
    
</div>
   <th height="41" colspan="2" scope="col"><h1><center>
        <span class="style2">To Start Voting you must choose your Election :</span>
   </center></strong></h1></th>
	<p>&nbsp;</p>
</div>
</div>
<div id="footer">
  <table width="463" align="center">
    <tr>
      <td width="455" height="61"><form id="form1" method="post" action="">
        <table width="459" height="103" align="center">
          <tr>
            <td width="305" height="55"><div align="center" >District A Election </div></td>
            <td width="142"><label>
              <div align="center">
                <input type="submit" name="Submit" value="Select" />
                </div>
            </label></td>
          </tr>
          <tr>
            <td height="40"><div align="center" >District B Election </div></td>
            <td><div align="center">
              <input type="submit" name="Submit2" value="Select" />
            </div></td>
          </tr>
        </table>
            </form>
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
	<p>&nbsp;</p>
	
</div>
</body>
</html>
