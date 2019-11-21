<!doctype html>
<html>
<head>
<style type="text/css">
body{
margin:0;
padding:0;
background-color:black;
color: white;
Font-family:Sans-serif;
background:url("background.jpg") no-repeat;
background-size:350%;


}
h2{
text-align:center;
text-decoration:underline;
text-weight:bold;

}
form{
text-align:center;
}
a:visited{color:white	
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
	display:inline;
	padding:20px;
	
	}
	ul a:hover{
	background-color:white;
	color:black;
	text-decoration:underlined;
	font-weight:bold;
	padding:20px;
	
	
	}
	.signup-box{
            width: 250px;
            position: absolute;
            background:black;
            top: 70%;
            left: 50%;
            transform: translate(-48%, -27%);
            color:#fff;
            width: 430px;
            height: 1075px;
            padding: 80px 40px;
            box-sizing: border-box;
            

        }
		.avatar{
            height:100px;
            width:100px;
            border-radius:50%;
            position: absolute;
            top:-50px;
            left: calc(50% - 50px);

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
		.input{
			width:50px



		}
		h1{
			color:#18e018;
			text-align:center;
			text-decoration:underline  #18e018;


		}
		input[type=text],input[type=password],input[type=email],input[type=number],input[type=Location],input[type=text]{
         width: 100%;
		 box-sizing:border-box;
		 padding:12px 5px;
		 background:rgba(0,0,0,0.10);
		 outline: none;
		 border:none;
		 border-bottom:#18e018 dotted #fff;
		 color:#fff;
		 border-radius:5px;
		 margin:5px;
		 font-weight:bold;

		}
		

</style>


</head>
<body>
<h2>Employee reward system-Production department</h2>

<h3> 
	<div class="header">
	<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="Login.php">Login</a></li>
	
	
	</ul>
	</div>
</h3>

 
  
<div class="signup-box">
<h1>Sign-up</h1>

<img src="avatar.png" class="avatar">

<form class="form-signup" action="includes/signup.inc.php" method="post">

Firstname:<input type="text" Placeholder="Firstnname" name="firstname" value=""><br><br>
Lastname:<input type="text" Placeholder="Lastnname" name="lastname" value=""><br><br>
Username:<input type="text" Placeholder="Username" name="Username" value=""><br><br>
Password:<input type="Password" Placeholder="Password" name="pwd" value=""><br><br>
Re-type Password:<input type="Password" Placeholder="RetypePassword" name="pwd_repeat" value=""><br><br>
Email:<input type="email" Placeholder="Email" name="mail" value=""><br><br>
Phone number: <input type="number"name="pnumber" Placeholder="Phone number" value=""><br><br>
Date of Birth: <input type="date" name="date" Placeholder="DOB" value=""><br><br>
Location:<input type="Location" placeholder="Location" name="Location" value=""><br><br>
Select the gender:
<input type="radio" name="Gender" value="Male"> Male
 <input type="radio" name="Gender" value="Female"> Female
 <input type="radio" name="Gender" value="Other"> Other<br /><br>
 Please select your position:
 <select type="text"name="Position">
  <option value="Manager">Manager</option>
  <option value="Employee">Employee</option> 
 </select><br /><br>
	
 
  
<button class="btn" type="submit" name="signup">Signup</button><br><br>
<button class="btn" type="reset" name="reset">Reset</button>


</form>


</div>





</body>



</html>