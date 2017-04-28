<?php 
echo '
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<script type="text/javascript" src="main.js" ></script>
	</head>

</html>

';
	 session_start();		
	$connection = mysqli_connect("127.0.0.1", "root","" , "tictactoe");
if (mysqli_connect_errno()) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}
	
	function SelectIteams()
	{
		global $connection;
		$query = "SELECT * FROM login ORDER BY id DESC limit 20";
		$result = mysqli_query($connection, $query);
		echo "<table id='tableContents'>
				<tr>
					<td>
						Username
					</td>
					<td>
						Score
					</td>
				</tr>";
					while ($row = mysqli_fetch_assoc($result)) {
					echo "<table id='tableCont'>
						<tr>
							<td>$row[Username]</td>
							<td>$row[Score]</td>
						</tr>";
						}
		echo "</table>";
	}
	
	function InsertIteams($score)
	{
		echo "ok";
		global $connection;

			$user = $_SESSION['user'];
			$pass = $_SESSION['pass'];
			$email = $_SESSION['email'];

		$query = "INSERT INTO login VALUES(DEFAULT ,'$user', '$pass', '$email', '$score' )";
		$result = mysqli_query($connection, $query);
	}
	
	function Login($user, $pass)
	{
		global $connection, $email , $pass , $user ;
		$query = "SELECT * FROM login";
		$result = mysqli_query($connection, $query);
		while ($row = mysqli_fetch_object($result)) {
			if ($user == $row->Username && $pass == $row->Password) 
			{
					$_SESSION['email'] = $row->Email;
					$_SESSION['user'] = $row->Username;
					$_SESSION['pass'] = $row->Password;

				header('Location: http://localhost/TicTacToeInternProject/WebContent/tictactoe.php');
			}
		}
		
	}	
	
	function Registration($user, $pass, $email)
	{
		global $connection;
		$query = "INSERT INTO login VALUES(DEFAULT ,'$user', '$pass', '$email', 0 )";
		$result = mysqli_query($connection, $query);
	}
	
	
	
?>
	 