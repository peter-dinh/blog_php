<?php
	require_once('models/category_model.php');
	class Category_Control
	{
		
		function List_Category()
		{
			$model = new Category_Blog();
			return $model->List_Category();
		}
		function Info_Category($id)
		{
			$model = new Category_Blog();
			return $model->Info_Category($id);
		}
		function Info_Max_ID()
		{
			$model = new Category_Blog();
			return $model->Info_Max_ID();
		}
		
		function Info_Unsigned_Name($id_category)
		{
			$model = new Category_Blog();
			return $model->Info_Unsigned_Name($id_category);
		}
		function Add_Category($category)
		{
			$model = new Category_Blog();
			return $model->Add_Category($category);
		}
		function Edit_Category($category)
		{
			$model = new Category_Blog();
			return $model->Eidt_Category($category);
		}
		function Del_Category($category)
		{
			$model = new Category_Blog();
			return $model->Del_Category($category);
		}
	}
?>