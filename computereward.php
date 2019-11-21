<?php 
include "includes/error.inc.php";
require "includes/dbh.inc.php";

$sql="SELECT sign_up.*, employee_details1.*,reward_details.*FROM employee_details1 INNER JOIN reward_details ON employee_details1.Employee_no=reward_details.Employee_no INNER JOIN sign_up ON sign_up.Username=employee_details1.Username";
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
background-size:300%;

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

<div class="col-lg-14 m-auto">


<table class="table" border="1px" width="100%" cellspacing="1px"cellpadding="5px">
<th colspan="16"><h4>Employee Production Details</h4></th>
<tr>
<th>Employee_no</th>
<th>First name</th>
<th>Last name</th>
<th>Username</th>
<th>Email</th>
<th>Phone number</th>
<th>Location</th>
<th>Gender</th>
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


while($row=mysqli_fetch_assoc($result)){
$Employee_no=$row['Employee_no'];
$fname=$row['fname'];
$lname=$row['lname'];
$Username=$row['Username'];
$email=$row['Email'];
$Pnumber=$row['Pnumber'];
$Location=$row['Location'];
$Gender=$row['Gender'];
$date=$row['Date'];
$Hours_required=$row['Hours_required'];
$Hours_worked=$row['Hours_worked'];
$Production_Required=$row['Production_required'];
$Production_Done=$row['Production_done'];
$Salary=$row['Salary'];
$Reward_hours=$row['Hours_Reward'];
$Reward_production=$row['Production_reward'];



?>


<td><?php echo $Employee_no ?></td>
<td><?php echo $fname ?></td>
<td><?php echo $lname ?></td>
<td><?php echo $Username ?></td>
<td><?php echo $email ?></td>
<td><?php echo $Pnumber ?></td>
<td><?php echo $Location ?></td>
<td><?php echo $Gender ?></td>
<td><?php echo $date ?></td>
<td><?php echo $Hours_required ?></td>
<td><?php echo $Hours_worked ?></td>
<td><?php echo $Production_Required ?></td>
<td><?php echo $Production_Done ?></td>
<td><?php echo $Salary ?></td>
<td><?php echo $Reward_hours ?></td>
<td><?php echo $Reward_production ?></td>


<tr>
	<?php
    }

	 ?>

</table>

</div>




</body>






</html>



