<?php

require 'DBH.inc.php';
if (isset($_POST['submit'])){
$Username=$_POST['employee'];
$Date=$_POST['date'];
$Hours_required=$_POST['hrequired'];
$Hours_worked=$_POST['hworked'];
$Production_Required=$_POST['prequired'];
$Production_Done=$_POST['pdone'];
$Salary=$_POST['Salary'];

$sql="INSERT INTO employee_details1(Username,Date,Hours_required,Hours_worked,Production_required,Production_done,Salary)values('$Username','$Date','$Hours_required','$Hours_worked','$Production_Required','$Production_Done','$Salary')";
if($conn->query($sql)===TRUE){
$last_id = $conn->insert_id;
$reward = computeRewards($last_id);
if($reward){
header("Location: ../record.php");
exit();
} else {
 echo $last_id;
}
}else
{
 echo "Error: " . $sql ."<br>".$conn->error;
}
}
function computeRewards($employee_no) {
global $conn;
$sql = "SELECT * FROM employee_details1 where Employee_no = '$employee_no'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$Hours_worked = $row["Hours_worked"];
$Hours_required = $row["Hours_required"];
$Production_done = $row["Production_done"];
$Production_required = $row["Production_required"];
$salary = $row["Salary"];
if($Hours_worked>$Hours_required){
echo "h >";
$percentage=($Hours_worked/$Hours_required);
$Reward_hours = 0;
	if($percentage > 1.0 && $percentage <= 1.2) {
		$Reward_hours = $percentage*$salary;		
	} else if($percentage > 1.2 && $percentage <= 1.4) {
		$Reward_hours = "A day off";
	} else if($percentage > 1.4 && $percentage <= 1.60) {
		$Reward_hours = " a gift";
	}
	else if($percentage > 1.60 && $percentage <= 1.80) {
		$Reward_hours = "Promotion to Production supervisor";
	}
	else if($percentage>1.80) {
		$Reward_hours = "A trip to another country for 2 weeks";
	}
} else {
	$Reward_hours = "no reward";
}
if($Production_done>$Production_required){
echo "p >";
	$percentage=($Production_done/$Production_required);
	$Reward_producion = 0;
	if($percentage > 1.0 && $percentage <= 1.2) {
		$Reward_production = $percentage*$salary;
	} else if($percentage > 1.20 && $percentage <= 1.40) {
		$Reward_production = "A day off";
	} else if($percentage > 1.40 && $percentage <= 1.60) {
		$Reward_production = "a week off";
	}
	else if($percentage > 1.60 && $percentage <= 1.80) {
		$Reward_production = "A car ";
	}
	else if($percentage>1.80) {
		$Reward_production = "A trip to another country for 4 weeks";
		
	}


} else {
	$Reward_production = "no reward";
}

echo $Reward_hours . " " . $Reward_production;


$sql="INSERT INTO reward_details(Employee_no,Hours_Reward,Production_Reward) VALUES('$employee_no','$Reward_hours','$Reward_production')";

if($conn->query($sql)) {
 return true;
} else {
return false;
}
 

}


?>