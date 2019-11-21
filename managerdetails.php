<?php 

include "includes/error.inc.php";
?>
<!doctype html>
<html lang="en-US">
<head>
<title>Employee reward system-case production department</title>
<style type="text/css">
body{
margin:0;
padding:0;
background-color:black;
color: white;
Font-family:Sans-serif;
background:url("background.jpg") no-repeat;
background-size:200%;

}
h2{
text-decoration:underline;
text-align:center;
font-weight:bold;
font-family:sans-sarif;
}
a:visited{color:white;	
	}
	a:hover{
	background-color:white;
	color:black;
	text-decoration:underlined;
	font-weight:bold;
	
	}
	h3{
	text-align:right;
	line-height:20px;
	color:white;
	}
	ul {
	list-style-type:none;
	
	}
	ul li{
	display:inline-block;
	padding:20px;
	
	}
	ul a:hover{
	background-color:white;
	color:black;
	text-decoration:underlined;
	font-weight:bold;
	padding:20px;

	
	
	}
	.table{
	border-collapse:collapse;
	margin:25px 0;
	font-size:0.9em;
	min-width:400px;
	
	}
	.table tr{
	background-color:#ffffff;
	color:black;
	
	
	
	}

</style>



</head>
<body>
<h2>Employee reward system-Production department</h2>
<h3> 
	<div class="header">
	<ul>
	<li><a href="manager.php">Home</a></li>
	<li><a href="record.php">Enter production details</a></li>
	<li><a href="allemployeedetails1.php">Employee details</a></li>
	<li><a href="managerdetails.php">My details</a></li>
	<li><a href="computereward.php">Reward details</a></li>
	<li><a href="includes/Logout.inc.php">logout</a></li>
	
	</ul>
	</div>
</h3>

<table class="table" border="1px" width="100%" cellspacing="1px"cellpadding="5px">
<th colspan="14"><h4>Employee Production Details</h4></th>
<tr>

<th>First name</th>
<th>Last name</th>
<th>Username</th>
<th>Email</th>
<th>Phone number</th>
<th>Location</th>
<th>DOB</th>
<th>Gender</th>
<th>Position</th>




</tr>
<?php
require "includes/dbh.inc.php";


$fname=$_SESSION["user"]["fname"];
$lname=$_SESSION["user"]["lname"];
$Username=$_SESSION["user"]["Username"];
$Email=$_SESSION["user"]["Email"];
$Pnumber=$_SESSION["user"]["Pnumber"];
$Location=$_SESSION["user"]["Location"];
$Dob=$_SESSION["user"]["DOB"];
$Gender=$_SESSION["user"]["Gender"];
$Position=$_SESSION["user"]["Position"];

?>
<tr>

<td><?php echo $fname ?></td>
<td><?php echo $lname ?></td>
<td><?php echo $Username ?></td>
<td><?php echo $Email ?></td>
<td><?php echo $Pnumber ?></td>
<td><?php echo $Location ?></td>
<td><?php echo $Dob ?></td>
<td><?php echo $Gender ?></td>
<td><?php echo $Position ?></td>


</tr>
</table>

</body>






</html>