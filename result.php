<?php
include('includes/config.php');


$collect = result();
$collect2 = result2();
$collect3 = result3();



?>


<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="evoting"; // Database name
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING REGISTRATION SYSTEM||</title>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="design.css" rel="stylesheet" type="text/css" />
<link href="taskbar.css" rel="stylesheet" type="text/css" />
<style type="text/css">

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
		  <a href="login.php">|  Vote  |</a></li>
		<li>
		  <a href="logout.php">|  Logout |</a></li>
		
		
		<li>
		  <a href="contact.php">|  Contact Us  |</a></li>
	</ul>
</div>

  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1>
  </th>
</div>
<div id="footer">
 
  <table width="719" border="0" align="center">
    <tr>
      <th width="713" height="661" scope="col"><form id="form1" method="post" action="">
          <table width="671" border="0" align="center">
            <tr>
              <th width="233" bgcolor="" scope="col"><span >Candidate</span></th>
              <th width="233" scope="col"><span >Name</span></th>
              <th width="233" bgcolor="" scope="col"><span >Vote Count</span></th>
              </tr>
			<br><br>
            <tr>
              <td height="151"><img src="images/contact1.jpg" alt="" width="177" height="218" /></td>
              <td>Mr. Narendra Modi </td>
              <td>
			  <span id="cont1"> <?php echo $collect; ?><div id="holder" align="left" > 
                                <div id="outer-content" >
                                <div id="content" >
                                </div>
                                </div>
                                </div>
			 <span></td>
              
            </tr>
            <tr>
              <td height="150"><img src="images/contact2.jpg" alt="" width="180" height="182" /></td>
              <td>Mr. Arivind Kejriwal </td>
              <td><?php echo $collect2; ?>
			  <div id="holder" align="left" > 
                                <div id="outer-content" >
                                <div id="content2" >
                                </div>
                                </div>
                                </div>
			 
			  </td>
              
            </tr>
            <tr>
              <td height="105"><img src="images/contact3.jpg" alt="" width="178" height="183" /></td>
              <td>Mr. Rahul Gandhi </td>
              <td><?php echo $collect3; ?>
			  <div id="holder" align="left" > 
                                <div id="outer-content" >
                                <div id="content3" >
                                </div>
                                </div>
                                </div>
			 
			  </td>
              
            </tr>
            <tr>
              <td height="105">&nbsp;</td>
              <td>&nbsp;</td>
              <td></td>
              <td>&nbsp;</td>
            </tr>
          </table>
      </form></th>
    </tr>
    <tr>
      <th height="17" scope="col">&nbsp;</th>
    </tr>
  </table>
  <p>&nbsp;</p>
	<p>&nbsp;</p>
	<a href="graph_result.php" > Graph Result </a>
</div>
</body>
</html>
