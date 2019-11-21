<?php

$servername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="erd2";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);


if(!$conn){
die("Connection failed");

}