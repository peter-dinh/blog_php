<?php 
	require_once('models/category_model.php');
	class Category_Control_Clinet
	{
		function List_Category()
		{
			$model = new Category_Model_Clinet();
			return $model->List_Category();
		}
		function Get_ID_Category($category)
		{
			$model = new Category_Model_Clinet();
			return $model->Get_ID_Category($category);
		}
		function Get_Name_Category($category)
		{
			$model = new Category_Model_Clinet();
			return $model->Get_Name_Category($category);
		}
	}
?>