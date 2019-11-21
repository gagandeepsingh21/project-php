<?php 
if (isset($_POST["Login"])) {
	session_start();
	require_once "DBH.inc.php";
	$Username = $_POST["Username"];
	$Password = $_POST["pwd"];
	$sql = mysqli_query($conn, "SELECT * FROM sign_up WHERE Username = '$Username'");
	if (mysqli_num_rows($sql) > 0) {
		$user = mysqli_fetch_array($sql);
			//var_dump($user);
			if (password_verify($Password, $user["PASSWORD"])) {
				$_SESSION["Username"] = $user["Username"];
				$_SESSION["Position"] = $user["Position"];
				$_SESSION["user"] = $user;
				if ($_SESSION["Position"] == "Manager") { // redirect to homepage if member
					header("Location: ../manager.php");
					exit();
				}elseif ($_SESSION["Position"] == "Employee") { // redirect to admin homepage if admin
					header("Location: ../employeehome.php");
					exit();
				}
			}else{ // if password hash does not match
				$_SESSION["login_error"] = "Error Logging In. Please check your credentials.";
				header("Location: ../Login.php?err=wrong-pass");
				exit();
			}
		
	}else{ // if username does not return a match from database
		$_SESSION["login_error"] = "Error Logging In. Please check your credentials.";
		header("Location: ../Login.php?err=wrong-username");
		exit();
	}
}else{
	header("Location: ../Login.php?err=post-not-set");
	exit();
}
mysqli_close($conn);
?>