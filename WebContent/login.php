<?php 
	$userError = $passError = "" ; 
		$isCorectInformation = true;
		if (isset($_POST['login'])) {
		
			
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
				
		
				if($isCorectInformation)
				{
					include('database.php');
					Login($user, $pass);
				}
		
		
		
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
  
  <html>
  	<head>
  		<link rel="stylesheet" type="text/css" href="style.css"/>
  	</head>
  	
  	<body>
  	<form method="post">
  		<div class="usernameLog">
 		 Username: <input type="text" name="user">
 		  <P><?php echo $userError; ?></P> <br>	
  		</div>
  		
  		<div class="passwordLog">
 		 Password: <input type="password" name="pass">
 		 <P><?php echo $passError; ?></P> <br>	
  		</div>
  		
  		<div class="btnReg">
		<button id="btnRegister" class="btnRegister" value="Login" name="login">LOG IN</button>
		</div>
  		
  		
  	</form>
  	</body>
  	
  </html>