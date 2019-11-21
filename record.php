<?php 
include "includes/error.inc.php";

require "includes/dbh.inc.php";
$sql="SELECT * FROM sign_up where Position='Employee'";
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
	.btn{
            border:none;
            outline:none;
            height:40px;
            background:blue;
            color:#fff;
            font-size:18px;
            border-radius:20px;
            width:275px;
           cursor:pointer;

        }
        .btn:hover{
            background:blue;
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
		<li><a href="record.php">Enter production details</a></li>
	<li><a href="allemployeedetails1.php">Employee details</a></li>
	<li><a href="managerdetails.php">My details</a></li>
	<li><a href="computereward.php">Reward details</a></li>
	<li><a href="includes/Logout.inc.php">logout</a></li>

	
	</ul>
	</div>
</h3>
<div align="center">
<h2>Employee production details</h2>

<form action="includes/record.inc.php" method="POST">
Select the employee to key  the Production details:
<select name="employee">

<?php while($row=mysqli_fetch_assoc($result)) { ?>

 <option value="<?php echo $row["Username"] ?>"><?php echo $row["fname"] . " ". $row["lname"] ?></option><br><br>


<?php } ?>

 </select><br /><br>
Date: <input type="date" name="date">
 Hours required(hr):<input name="hrequired" value="" placeholder="Hours required">
 Hours worked(hr):<input name="hworked" value="" placeholder="Hours worked"><br><br>
 Production Required(in kg):<input name="prequired" value="" placeholder="Production_required" >
 Production done(in kg):<input name="pdone" value="" placeholder="Production_required" >
 <br /><br>
  Salary:<input name="Salary" value="" placeholder="Salary" ><br /><br>

 
 
 
<button class="btn" type="submit" name="submit">Submit</button><br><br>
<button class="btn" type="reset" name="reset">Reset</button><br><br>

</form>







</body>






</html>