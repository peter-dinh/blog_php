<?php 
	require_once('connect.php');
	class Account_Blog
	{
		function List_Account()
		{
			$mysqli = new Connect();
			return mysqli_query($mysqli->connect(), "select * from account order by id desc");
		}
		
		
		function Info_Max_ID()
		{
			$mysqli = new Connect();
			try
			{
				$x = mysqli_query($mysqli->connect(), "select * from account order by id desc");
				$result = $x->fetch_array();
				return $result["id"] +1;
			}
			catch(Exception $e){
				echo "Error: ".$e->getMessage();
			}
			return 1;
		}
		
		function Add_Account($Account)
		{
			$mysqli = new Connect();
			try
			{
				$query="INSERT INTO `account`(`id`, `username`, `password`, `name`, `sex`, `address`, `phone`, `mail`, `date`, `type_account`, `date_register`, `active`, `key`,`online`, `avatar`) VALUES ('{1}','{2}','{3}','{4}','{5}','{6}','{7}','{8}','{9}','{10}','{11}','{12}','{13}','{14}','{15}')";
				foreach($Account as $key => $values)
				{
					$str = "{".($key + 1) ."}";
					$query = str_replace("$str",$values, $query);
				}
				mysqli_query($mysqli->connect(), $query);
			}
			catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
		
		
		function Info_Account($id)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from account where id='$id'");
			$array = $x->fetch_array();
			return $array;
		}


		function Edit_Admin_Account($Account)
		{
			$mysqli = new Connect();
			try
			{
				$query="UPDATE `account` SET `type_account`='{10}' WHERE `id`='{1}'";
				foreach($Account as $key => $values)
				{
					$str = "{". ($key+1) ."}";
					$query = str_replace("$str",$values, $query);
				}
				echo $query;
				mysqli_query($mysqli->connect(), $query);
			}
			catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
		
		
		
		function Del_Account($id)
		{
			$mysqli = new Connect();
			try{
				mysqli_query($mysqli->connect(), "delete from account where id='$id'");
			}catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
		
		
		
		function Check_Account_Mail($email)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from account where mail='$email'");
			if(mysqli_num_rows($x) == 1)
				return true;
			else return false;
		}
		
		
		function Change_Pass($string_pass, $string_account)
		{
			if($this->Check_Account_Mail($string_account) == true) 
			{
				$mysqli = new Connect();
				mysqli_query($mysqli->connect(),"UPDATE `account` SET password= '$string_pass' where mail='$string_account'");
			}
			else 
				return false;
		}
		



		
		//---------  other ---------

		function Count_Account ()
		{
			$mysqli = new Connect();
			$x =  mysqli_query($mysqli->connect(), "select * from account order by id desc");
			return mysqli_num_rows($x);
		}



		function Check_Account($email,$pass)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from account where mail='$email' and password='$pass' and active='1'");
			if(mysqli_num_rows($x) == 1)
			{
				$row = $x->fetch_row();
				$_SESSION["email"] = $row[7];
				$_SESSION["name"] = $row[3];
				$_SESSION["type_account"] = $row[9];
			}
		}

		function Edit_Profile_Account($Account)
		{
			$mysqli = new Connect();
			try
			{
				$query="UPDATE `account` SET `type_account`='{10}' WHERE `id`='{1}'";
				foreach($Account as $key => $values)
				{
					$str = "{". ($key+1) ."}";
					$query = str_replace("$str",$values, $query);
				}
				
				mysqli_query($mysqli->connect(), $query);
			}
			catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}

		function Check_Account_User($user)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from account where username='$user'");
			if(mysqli_num_rows($x) == 1)
			{
				$row = $x->fetch_array();
				return $row['password'];
			}
		}

		function Active_Account($Account)
		{
			$mysqli = new Connect();
			try
			{
				$query="UPDATE `account` SET `active`='{12}' WHERE `id`='{1}'";
				foreach($Account as $key => $values)
				{
					$str = "{".($key+1)."}";
					$query = str_replace("$str",$values, $query);
				}
				mysqli_query($mysqli->connect(), $query);
			}
			catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
	}
?>