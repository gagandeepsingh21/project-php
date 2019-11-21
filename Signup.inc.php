<?php
if (isset($_POST['signup'])){
require 'dbh.inc.php';

$Fname=$POST('firstname');
$Lname=$POST('lastname');
$Username=$POST['Username'];
$Password=$POST['pwd'];
$Re_type_Password=$POST['pwd-repeat'];
$Email=$POST['mail'];
$Location=$POST['Location'];
$Pnumber=$POST['Pnumber'];
$DOB=$POST['date'];
$Gender=$POST['Gender'];
$Position=$POST['Position'];

if(empty($Fname)||empty($Lname)||empty($Username)||empty($Password)||empty($Re_type_Password)||empty($Email)||empty($Location)||empty($Pnumber)||empty($DOB)||empty($Gender)||empty($Position)){
header("Location: ../signup.php?error=emptyfields&firstname=",$Fname,"&Lname=",$lastname,"&Username=",$Username,"&Password=",$Pwd,"&Re_type_Password=",$pwd_repeat,"&Email=",$mail,"&Location=",$Location,"&Pnumber=",$Pnumber,"&Gender=",$Gender,"&Position=",$Position);
}
}
