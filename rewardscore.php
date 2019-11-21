<?php 
include "includes/error.inc.php";
require"includes/dbh.inc.php";
$_SESSION["user"]=$user;
$sql="SELECT sign_up.*, employee_details1.*,reward_details.*FROM employee_details1 INNER JOIN reward_details ON employee_details1.Employee_no=reward_details.Employee_no INNER JOIN sign_up ON sign_up.Username=employee_details1.Username WHERE Employee_no=$Employee_no";
$result=mysqli_query($conn,$sql);
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

</style>



</head>
<body>
<h2>Employee reward system-Production department</h2>
<h3> 
	<div class="header">
	<ul>
	<li><a href="employeehome.php">Home</a></li>
	<li><a href="employeedetails.php">My details</a></li>
	<li><a href="rewardscore.php"> My Reward</a></li>
	<li><a href="includes/Logout.inc.php">logout</a></li>

	
	</ul>
	</div>
</h3>
<table class="table" border="1px" width="100%" cellspacing="1px"cellpadding="5px">
<th colspan="14"><h4>Employee Production Details</h4></th>
<tr>

<th>ID</th>
<th>Employee number</th>
<th>Username</th>
<th>Date</th>
<th>Hours_required</th>
<th>Hours_worked</th>
<th>Production_required</th>
<th>Production_done</th>
<th>Salary</th>
<th>Hours reward</th>
<th>production reward</th>




</tr>
<?php
require "includes/dbh.inc.php";


$ID=$_SESSION["user"]["id"];
$Employee_no=$_SESSION["user"]["Employee_no"];
$Username=$_SESSION["user"]["username"];
$Date=$_SESSION["user"]["Date"];
$Hours_required=$_SESSION["user"]["Hours_required"];
$Hours_worked=$_SESSION["user"]["Hours_worked"];
$Production_required=$_SESSION["user"]["Production_required"];
$Production_done=$_SESSION["user"]["Production_done"];
$Reward_hours=$_SESSION['Hours_Reward'];
$Reward_production=$_SESSION['Production_reward'];


?>
<tr>

<td><?php echo $ID ?></td>
<td><?php echo $Employee_no ?></td>
<td><?php echo $Username ?></td>
<td><?php echo $Date ?></td>
<td><?php echo $Hours_required?></td>
<td><?php echo $Hours_worked ?></td>
<td><?php echo $Production_required ?></td>
<td><?php echo $Production_done ?></td>
<td><?php echo $Reward_hours ?></td>
<td><?php echo $Reward_production ?></td>


</tr>
</table>






</body>






</html>