<?php 
require "includes/dbh.inc.php";

$Employee_no=$_GET['GetID'];
$sql="SELECT sign_up.*,employee_details1.* FROM sign_up INNER JOIN employee_details1 ON employee_details1.Username=sign_up.Username";
$result=mysqli_query($conn,$sql);

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



}


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
	.btn {
            width: 30%;
            background: none;
            border: 1px solid #4caf50;
            color: white;
            cursor: pointer;
        }
		.btn{
            border:none;
            outline:none;
            height:40px;
            background:#fb2525;
            color:#fff;
            font-size:18px;
            border-radius:20px;
            width:275px;
           cursor:pointer;

        }
        .btn:hover{
            background:#18e018;
            color:#000;



        }


</style>



</head>
<body>
<h2>Employee reward system-Production department</h2>
<h3> 
	<div class="header">
	<ul>
	<li><a href="manager.php">Home</a></li>
	<li><a href="allemployeedetails1.php">Employee details</a></li>
	<li><a href="managerdetails.php">My details</a></li>
	<li><a href="computereward.php">Reward details</a></li>
	<li><a href="includes/Logout.inc.php">logout</a></li>

	
	</ul>
	</div>
</h3>

<div align="center">
<h2> Update Empoyee production details</h2>

<form action="includes/update.inc.php?ID=<?php echo $Username ?>"method="POST">

Firstname:<input type="text" Placeholder="Firstnname" name="fname" value="<?php echo $fname ?>" >
Lastname:<input type="text" Placeholder="Lastnname" name="lname" value="<?php echo $lname ?>" ><br><br>
Username:<input type="Username" Placeholder="Username" name="username"value="<?php echo $Username ?>" >
Email:<input type="email" Placeholder="Email" name="mail" value="<?php echo $email ?>"> <br><br>
Phone number:<input name="pnumber" Placeholder="Phone number"value="<?php echo $Pnumber ?>" >
Location:<input type="Location" placeholder="Location" name="Location" value="<?php echo $Location ?>" ><br><br>
Select the gender:
<select name="Gender" size="1" value="<?php echo $Gender ?>" >
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>

</select><br /><br>
 Date:<input type="date" name="date" Placeholder="Date" value="<?php echo $date ?>"><br><br>

 Hours required(hr):<input name="hrequired" placeholder="Hours required"value="<?php echo $Hours_required?>">
 Hours worked(hr):<input name="hworked"  placeholder="Hours worked"value="<?php echo $Hours_worked ?>"><br><br>
 Production Required(in kg):<input name="prequired"  placeholder="Production_required"value="<?php echo $Production_Required ?>" >
 Production done(in kg):<input name="pdone"  placeholder="Production_required" value="<?php echo $Production_Done ?>">
 <br /><br>
 Salary:<input name="salary" value="<?php echo $Salary ?>" placeholder="Salary" ><br /><br>
 
 
  
<button class="btn" type="submit" name="update">Update</button><br><br>

</form>







</body>






</html>