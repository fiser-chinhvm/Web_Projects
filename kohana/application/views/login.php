<!DOCTYPE html>
<html>
<head>
<!-- <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
<link href='<?php echo url::base();?>css/style.css' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">

<title>Chinh's Website</title>
</head>

<body>

<h1 style="margin-top:35px">WELCOME TO CHINH'S LOGIN PAGE</h1>
<div style="margin-top: 40px"class="login-block">
    <h1>LOGIN</h1>
    <div style="margin-left:40px" class="error"> <?php echo $message ?></div> 
    <form action = "user/login" method = "POST">
        <!-- <i class="fa fa-bomb"></i> -->
	    <input type="txt" value="" placeholder="Username" id="username" name="username" />
	    <input type="password" value="" placeholder="Password" id="password" name="pass" />
	    <button>SUBMIT</button>
	</form>
</div>
</body>

</html>