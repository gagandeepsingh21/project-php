<?php 
require "dbh.inc.php";

$Employee_no=$_GET['Employee_no'];

$sql="DELETE FROM employee_details1 WHERE Employee_no=$Employee_no";

mysqli_query($conn,$sql);

header("Location: ../allemployeedetails1.php");
?>