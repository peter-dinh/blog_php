<?php 
	require_once('models/comment_model.php');
	class Comment_Control
	{
		function List_Comment()
		{
			$model = new Comment_Blog();
			return $model->List_Comment();
		}

		function Del_Comment($id_comment)
		{
			$model = new Comment_Blog();
			return $model->Del_Comment($id_comment);
		}
		
		function Info_Comment($id_comment)
		{
			$model = new Comment_Blog();
			return $model->Info_Comment($id_comment);
		}
		
		function Info_Max_ID()
		{
			$model = new Comment_Blog();
			return $model->Info_Max_ID();
		}
		function Title_Post($id_post)
		{
			$model = new Comment_Blog();
			return $model->Title_Post($id_post);
		}
		function Count_Comment()
		{
			$model = new Comment_Blog();
			return $model->Count_Comment();
		}
		function Count_Comment_New()
		{
			$model = new Comment_Blog();
			return $model->Count_Comment_New();
		}
		function Update_New_Comment()
		{
			$model = new Comment_Blog();
			return $model->Update_New_Comment();
		}
	}
?>