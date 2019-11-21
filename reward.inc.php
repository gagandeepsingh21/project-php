<?php

require 'DBH.inc.php';
if (isset($_POST['Submit'])){

$Username=$_POST['username'];
$Hours_required=$_POST['hrequired'];
$Hours_worked=$_POST['hworked'];
$Production_Required=$_POST['prequired'];
$Production_Done=$_POST['pdone'];

$sql="SELECT Employee_no,Username,Hours_required,Hours_worked,Production_required,Production_done FROM employee_details1 WHERE Employee_npo='".$Employee_no."'";



}
?>