<?php 
	require_once('models/account_model.php');
	require_once('other.php');
	class Account_Control
	{
		function List_Account()
		{
			$model = new Account_Blog();
			return $model->List_Account();
		}
		

		function Info_Max_ID()
		{
			$model = new Account_Blog();
			return $model->Info_Max_ID();
		}


		function Add_Account($Account)
		{
			$model = new Account_Blog();
			return $model->Add_Account($Account);
		}

		function Info_Account($id)
		{
			$model = new Account_Blog();
			return $model->Info_Account($id);
		}

		function Edit_Admin_Account($Account)
		{
			$model = new Account_Blog();
			return $model->Edit_Admin_Account($Account);
		}
			
		
		function Del_Account($Account)
		{
			$model = new Account_Blog();
			return $model->Del_Account($Account);
		}
		

		
		function ACCOUNT_ADD( $id_account)
		{
			if(isset($_POST['add_account']))
			{
				$other = new Other();
				$url_image = $other->Upload_File();
				if($url_image != null)
				{
					$username = $_POST['user'];
					$password = $_POST['pass'];
					$name = $_POST['name'];
					$sex = $_POST['sex'];
					$address = $_POST['address'];
					$phone = $_POST['phone'];	
					$mail = $_POST['mail'];
					$date = $_POST['date'];
					$type_account = $_POST['role'];
					$date_register = date("Y-m-d");
					$active = $_POST['active'];
					$key = $other->RandomKey();
					$online = 0;
					$array = array($id_account, $username, $password, $name, $sex, $address, $phone, $mail, $date, $type_account, $date_register, $active, $key,$online,$url_image );
					$this->Add_Account($array);
				}
			}
		}

		
		function ACCOUNT_EDIT($id_account)
		{
			if(isset($_POST['edit_account']))
			{
				$username = 1;
				$password = 1;
				$name = 1;
				$sex = 1;
				$address = 1;
				$phone = 1;
				$mail = 1;
				$date = 1;
				$type_account = $_POST['role'];
				$date_register = 1;
				$active = 1;
				$key = 1;
				$online = 0;
				$url_image = 0;
				$array = array($id_account, $username, $password, $name, $sex, $address, $phone, $mail, $date, $type_account, $date_register, $active, $key,$online,$url_image );
				$this->Edit_Admin_Account($array);
			}
		}
		


		//----------------------------------------------
		
		function Change_Pass($string_pass, $string_account)
		{
			$model = new Account_Blog();
			return $model->Change_Pass($string_pass, $string_account);
		}
		function Count_Account ()
		{
			$model = new Account_Blog();
			return $model->Count_Account();
		}


		function Edit_Profile_Account($Account)
		{
			$model = new Account_Blog();
			return $model->Edit_Profile_Account($Account);
		}

		function Check_Account($email,$pass)
		{
			$model = new Account_Blog();
			return $model->Check_Account($email,$pass);
		}

		function Active_Account($Account)
		{
			$model = new Account_Blog();
			return $model->Active_Account($Account);
		}
	}
?>