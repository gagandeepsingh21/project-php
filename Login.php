<!doctype html>


<html>

<head>
    <style type="text/css">
        @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
            Font-family: Sans-serif;
            background: url("background.jpg") no-repeat;
            background-size: 200%;
        }
        
        
        h2 {
          text-align:center;
          text-decoration:underline;
          text-weight:bold;
        }
        
        a:visited {
            color: white;
        }
        
        h3 {
            
            text-align: right;
            line-height: 20px;
            color: white;
			cursor:pointer;
        }
        
        ul {
            list-style-type: none;
        }
        
        ul li {
            display: inline;
            padding: 20px;
        }
        
        h1 {
            text-align: underline;
        }
        
        ul a:hover {
            background-color: white;
            color: black;
            text-decoration: underlined;
            font-weight: bold;
            padding: 20px;
        }
        
        .login_box {
            width: 250px;
            position: absolute;
            background:#000;
            top: 50%;
            left: 50%;
            transform: translate(-48%, -38%);
            color:#fff;
            width: 350px;
            height: 450px;
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
        
        .login_box h1 {
            border-bottom: 6px solid #18e018;
            margin-bottom: 20px;
            padding: 10px 0;
        }
        
        .textbox {
            width: 100%;
            overflow: hidden; 
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid #18e018;
        }
        
        .textbox i {
            width: 30px;
            float: left;
            text-align: center;
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
        
        .textbox input {
            border: none;
            outline: none;
            background: none;
            color: white;
            font-size: 15px;
        }
        
        
    </style>
    <h2 align="center">Employee reward system-Production department</h2>

    <h3>
        <div class="header">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Signup.php">Sign up</a></li>

            </ul>
        </div>
    </h3>



</head>

<body>


    <div class="login_box" action="includes/Login.inc.php">
	<img src="avatar.png" class="avatar">
	<form action="includes/Login.inc.php" method="post">
            <h1>Log-in</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username or Email" name="Username" value="">
            </div><br>
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="pwd">
            </div><br>
			
			
            <input class="btn" type="submit" name="Login" value="Log in"><br><br>
            
        </form>
        <a href="Signup.php"><input class="btn" type="submit" name="" value="Sign up"></a>
	
	
       

    </div>
	
	
	
	




</body>






</html>