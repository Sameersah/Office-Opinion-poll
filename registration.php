<?php
include('includes/config.php');
$collect='';
if($_POST){
$collect = insert($_POST);
}

?>


<html >

<head>

<title>|| VOTING REGISTRATION SYSTEM||</title>

<link href="design.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style11 {font-size: 18px; font-weight: bold; }
.style13 {font-size: x-large; font-weight: bold; color: #000000; }
.style2 {	color: #FF00FF;
	font-weight: bold;
}
.style3 {
	font-size: 18px;
	color: #000000;
}
.style4 {font-size: 18px; color: #FFFFFF; }
.style5 {font-size: 12px}
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
		  <a href="login.php" >|  Login  |</a></li>
		<li>
		  <a href="result.php">|  Result  |</a></li>
		
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
  <table width="651" border="0" align="center">
    <tr>
      <th width="645" height="783" scope="col"><table width="667" height="31" border="0" align="center" bgcolor="">
          <tr>
            <th width="607" scope="col"><div align="center"><span class="style4">REGISTRATION FORM </span></div></th>
          </tr>
          <tr>
            <th scope="col"><div "align="center"  style="background:white"  >
          <h1    align="center"><?php echo $collect; ?></h1>
          </div>&nbsp;        </th>
          </tr>
        </table>
          <form action="" method="post" enctype="multipart/form-data" id="form1">
            <table width="500" border="0" align="center" cellpadding="3" cellspacing="17" style="background-color:white">
              <tr>
                <th width="122" scope="col"><div align="justify">First Name</div></th>
                <th width="246" scope="col"><div align="justify">
                    <input type="text" name="txtfirstname" />
                </div></th>
              </tr>
              <tr>
                <td><div align="justify">Last Name</div></td>
                <td><div align="justify">
                    <input type="text" name="txtlastname" />
                </div></td>
              </tr>
			  <tr>
                <td><div align="justify">Election ID</div></td>
                <td><div align="justify">
                    <input type="text" name="txtelectionid" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">Sex</div></td>
                <td><div align="justify">
                  <label>
                  <select name="txtsex">
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                  </select>
                  </label>
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">Age</div></td>
                <td><div align="justify">
                    <input type="number" name="txtage" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">Address</div></td>
                <td><div align="justify">
                    <input type="text" name="txtaddress" />
                </div></td>
              </tr>
			  <tr>
                <td><div align="justify">City</div></td>
                <td><div align="justify">
                    <input type="text" name="txtcity" />
                </div></td>
              </tr>
               <tr>
                <td><div align="justify">District </div></td>
                <td><div align="justify">
                    <input type="text" name="txtelectiondist" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">State</div></td>
                <td><div align="justify">
                    <input type="text" name="txtstate" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">Country<span class="style5"></span></div></td>
                <td><div align="justify">
                    <input type="text" name="txtcountry" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">Phone</div></td>
                <td><div align="justify">
                    <input type="number" name="txtphone" />
                </div></td>
              </tr>
              <tr>
                <td><div align="justify">E-mail</div></td>
                <td><div align="justify">
                    <input type="email" name="txtemail" />
                </div></td>
              </tr>
             
              <tr>
                <td>Occupation</td>
                <td><div align="justify">
                    <input type="text" name="txtoccupation" />
                </div></td>
              </tr>
              <tr>
                <td>Username</td>
                <td><input type="text" name="txtusername" /></td>
              </tr>
              <tr>
                <td>Password </td>
                <td><input type="text" name="txtpassword"  "/></td>
              </tr>
              <tr>
                <td><input type="submit" name="Submit" value="Register" /></td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form></th>
    </tr>
  </table>
  <p>&nbsp;</p>
	<p>&nbsp;</p>
	
</div>
</body>
</html>
