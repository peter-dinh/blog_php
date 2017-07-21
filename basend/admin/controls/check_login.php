<?php 
	require_once('../models/check_login_model.php');
	class Check_Control
	{
		function Check_Account($email,$pass)
		{
			$model = new Check_Blog();
			$model->Check_Account($email,$pass);
		}
	}
?>