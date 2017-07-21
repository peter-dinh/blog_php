<?php 
	require_once('connect.php');
	class Check_Blog
	{
		function Check_Account($email,$pass)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from account where mail='$email' and password='$pass' and active='1'");
			if(mysqli_num_rows($x) == 1)
			{
				$row = $x->fetch_row();
				$_SESSION['id_user'] = $row[0];
				$_SESSION["email"] = $row[7];
				$_SESSION["name"] = $row[3];
				$_SESSION["type_account"] = $row[9];
			}
		}
	}
?>