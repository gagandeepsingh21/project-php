<?php
require "dbh.inc.php";
if(isset($_POST['update'])){

$Username=$_POST['username'];
$date=$_POST['date'];
$Hours_required=$_POST['hrequired'];
$Hours_worked=$_POST['hworked'];
$Production_Required=$_POST['prequired'];
$Production_Done=$_POST['pdone'];
$Salary=$_POST['salary'];

$query="UPDATE employee_details1 SET username='".$Username."',Date='".$date."',Hours_required='".$Hours_required."',Hours_worked='".$Hours_worked."',Production_required='".$Production_Required."',Production_done='".$Production_Done."',Salary='".$Salary."'WHERE username='".$Username."'";
$result=mysqli_query($conn,$query);
if($result){
header("Location: ../allemployeedetails1.php");
}else
{
echo"Please check you query";
}

}else{
header("Location: ../allemployeedetails1.php");

}





?>
