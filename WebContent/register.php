<?php
$userError = $passError = $emailError = "" ; 
$isCorectInformation = true;
	if(isset($_POST['Registration']))
	{
	
		if(!empty($POST["user"]))
		{
			$userError = "Incorect user";
			 $isCorectInformation = false;
		}
		else
		{
			$user= $_POST['user'];
		}
		
		
		if(!empty($POST["pass"]))
		{
			$passError = "Incorect user";
			 $isCorectInformation = false;
		}
		else
		{
			$pass= $_POST['pass'];
		}
		
		
		if(!empty($POST["email"]))
		{
			$emailError = "Incorect email";
			 $isCorectInformation = false;
		}
		else
		{
			$email= $_POST['email'];
		}
		
		
		if($isCorectInformation)
		{
			include("database.php");
			Registration($user, $pass, $email);
		}
		
		
	}




?>
  <html>
  	<head>
  		<link rel="stylesheet" type="text/css" href="style.css"/>
  	</head>
  	
  	<body>
  	<form method ="post">
  		<div class="userReg">
 		 Username: <input type="text" name="user">
 		 <P><?php echo $userError; ?></P> <br>
  		</div>
  		
  		<div class="passReg">
 		 Password: <input type="password" name="pass">
 		 <P><?php echo $passError; ?></P> <br>
  		</div>
  		
  		<div class="emailReg">
 		 Email: <input type="text" name="email"> <br>
 		 <P><?php echo $emailError; ?></P> <br>
  		</div>
  		
  		
  			<div class="butonReg" >
  			<input id="btnRegister" formaction="login.php" type="submit" value="Register" name="Registration">
  			
  			</div>
  		
  		
  	</form>
  	</body>
  	
  </html>