<?php 
	require_once('models/post_model.php');
	class Post_Control_Clinet
	{
		
		function Info_Post($id_post)
		{
			$model = new Post_Model_Clinet();
			return $model->Info_Post($id_post);
		}

		function List_Post_New()
		{
			$model = new Post_Model_Clinet();
			return $model->List_Post_New();
		}
		function List_Post_Popular()
		{
			$model = new Post_Model_Clinet();
			return $model->List_Post_Popular();
		}
		function List_Post_HighLight()
		{
			$model = new Post_Model_Clinet();
			return $model->List_Post_HighLight();
		}
		function List_Post_By_Category($id_category,$start)
		{
			$model = new Post_Model_Clinet();
			return $model->List_Post_By_Category($id_category,$start);
		}
		function Count_Post_By_Category($id_category)
		{
			$model = new Post_Model_Clinet();
			return $model->Count_Post_By_Category($id_category);
		}
		function Get_Unsigned_Title($id_category)
		{
			$model = new Post_Model_Clinet();
			return $model->Get_Unsigned_Title($id_category);
		}
		function Get_ID_Category2($id_post)
		{
			$model = new Post_Model_Clinet();
			return $model->Get_ID_Category2($id_post);
		}
		function Count_View($id_post)
		{
			$model = new Post_Model_Clinet();
			return $model->Count_View($id_post);
		}
	}
?>