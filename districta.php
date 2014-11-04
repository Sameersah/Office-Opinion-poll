<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="evoting"; // Database name


//anpp
if(isset($_POST['Submit'])) {

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


 //$e_id ="inec/ 396" ;
//	$attempt  = "1";
//$pres_result = mysql_query("SELECT pres_attempts FROM attempts where election_id ='$e_id'");
 //while($pres_row = mysql_fetch_row($pres_result)){
 //$pres_attempt =  $pres_row ['pres_attempts'];
  // if ($pres_attempt >= 1){
//header("location:error.php");
 
$names = 0;
$result = mysql_query("SELECT vote_count FROM districta_votes where party ='BJP'");
 while($row = mysql_fetch_row($result)){
   $names =  $row [0];
   $names =  $names + 1;
   
   mysql_query("UPDATE districta_votes SET vote_count=$names WHERE party ='BJP' ");
// mysql_query("UPDATE attempts SET pres_attempts = '$attempt' WHERE election_id ='$e_id' ");
  header("location:success_vote.php");
  }
 } 
//pdp
if(isset($_POST['Submit2'])) {
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$names2 =  0;
//$regnum = $_POST['txtnumber'];
$result = mysql_query("SELECT vote_count FROM districta_votes where party ='AAP'");
 while($row = mysql_fetch_row($result)){
   // $names = $row[1];
 $names2 =  $row [0];
   $names2 =  $names2 + 1;
   
   mysql_query("UPDATE districta_votes SET vote_count=$names2 WHERE party ='AAP' ");
  } 
}

//acn
if(isset($_POST['Submit3'])) {
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$names3 =  0;
//$regnum = $_POST['txtnumber'];
$result = mysql_query("SELECT vote_count FROM districta_votes where party ='congress'");
 while($row = mysql_fetch_row($result)){
   // $names = $row[1];
 $names3 =  $row [0];
   $names3 =  $names3 + 1;
   
   mysql_query("UPDATE districta_votes SET vote_count=$names3 WHERE party ='congress' ");
  } 
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING REGISTRATION SYSTEM||</title>
<script type="text/javascript">
function confirm_vote(textfield){
if(confirm("Are you sure you want to vote for "+textfield+" ?"))
{
return  true;
}
else {return false;
}
	 
}

function error($msg){
if(confirm("double voting "+$msg+" ?"))
{
return  true;
}
else {return false;
}
	 
}
</script>

<meta name="keywords" content="" />
<meta name="description" content="" />
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
.style8 {color: #990000}
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
		  <a href="logout.php">|  Logout |</a></li>
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
              <th width="233" bgcolor="" scope="col"><span >Party</span></th>
              </tr>
			<br><br>
            <tr>
              <td height="151"><img src="images/contact1.jpg" alt="" width="177" height="218" /></td>
              <td>Mr. Narendra Modi </td>
              <td><input type="submit" name="Submit" value="BJP"  onclick="return confirm_vote('<?php echo "Mr. Narendra Modi ";  ?>')" /></td>
              
            </tr>
            <tr>
              <td height="150"><img src="images/contact2.jpg" alt="" width="180" height="182" /></td>
              <td>Mr. Arivind Kejriwal </td>
              <td><input type="submit" name="Submit2" value="AAP" onclick="return confirm_vote('<?php echo "Mr. Arivind Kejriwal ";  ?>')"/></td>
              
            </tr>
            <tr>
              <td height="105"><img src="images/contact3.jpg" alt="" width="178" height="183" /></td>
              <td>Mr. Rahul Gandhi </td>
              <td><input type="submit" name="Submit3" value="Congress" onclick="return confirm_vote('<?php echo "Mr. Rahul Gandhi ";  ?>')"/></td>
              
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
	
</div>
</body>
</html>
