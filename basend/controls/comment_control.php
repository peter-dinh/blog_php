<?php 
	require_once('models/comment_model.php');
	class Comment_Control_Clinet
	{
		function List_Comment($id_post)
		{
			$model = new Comment_Model_Clinet();
			return $model->List_Comment($id_post);
		}
		function Count_Comment($id_post)
		{
			$model = new Comment_Model_Clinet();
			return $model->Count_Comment($id_post);
		}
		
		function Get_ID_Max_Comment()
		{
			$model = new Comment_Model_Clinet();
			return $model->Get_ID_Max_Comment();
		}
		
		function Add_Comment($id_coment)
		{
			$model = new Comment_Model_Clinet();
			$model->Add_Comment($id_coment);
		}
	}
?>