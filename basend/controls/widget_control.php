<?php 
	require_once('models/widget_model.php');
	/**
	* 
	*/
	class Widget_Control_Clinet
	{
		function List_Admin()
		{
			$model = new Widget_Model_Clinet();
			return $model->List_Admin();
		}

		function Total_Visit()
		{
			$model = new Widget_Model_Clinet();
			return $model->Total_Visit();
		}

		function Count_Online()
		{
			$model = new Widget_Model_Clinet();
			return $model->Count_Online();
		}
		
		function Info_Author($id_user)
		{
			$model = new Widget_Model_Clinet();
			return $model->Info_Author($id_user);
		}
	}
?>