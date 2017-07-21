<?php 
	require_once('models/post_model.php');
	require_once('other.php');
	class Post_Control
	{
		
		function List_Post()
		{
			$model = new Post_Blog();
			return $model->List_Post();
		}
		function List_Post_Draft()
		{
			$model = new Post_Blog();
			return $model->List_Post_Draft();
		}
		
		function Info_Post($id_post)
		{
			$model = new Post_Blog();
			return $model->Info_Post($id_post);
		}
		
		function Info_ID_Category($id_post)
		{
			$model = new Post_Blog();
			return $model->Info_ID_Category($id_post);
		}
		
		function Info_Max_ID()
		{
			$model = new Post_Blog();
			return $model->Info_Max_ID();
		}
		function Add_Post($post)
		{
			$model = new Post_Blog();
			return $model->Add_Post($post);
		}
		function Edit_Post($post)
		{
			$model = new Post_Blog();
			return $model->Edit_Post($post);
		}
		function Edit_Post_Not_Change_Avata($post)
		{
			$model = new Post_Blog();
			return $model->Edit_Post_Not_Change_Avata($post);
		}
		function Del_Post($id_post)
		{
			$model = new Post_Blog();
			return $model->Del_Post($id_post);
		}
		
		
		function POST_ADD( $id_post)
		{
			if(isset($_POST['add_post']))
			{
				$other = new Other();
				$url_image = $other->Upload_File();
				if($url_image != null)
				{
					$title = $_POST['title'];
					$unsigned_title = $other->changeTitle($title);
					$excerpt = $_POST['excerpt'];
					$content = $_POST['editor1'];
					$highlight = $_POST['highlight'];
					$date = $_POST['date'];	
					$id_category = $_POST['category'];
					$id_user = $_SESSION['id_user'];
					$view = 0;
					$public = 1;
					$array = array($id_post, $title, $unsigned_title, $excerpt, $url_image, $date, $id_user, $content,$id_category, $view, $highlight, $public);
					$this->Add_Post($array);
				}
			}
		}
		
		
		function POST_EDIT( $id_post)
		{
			if(isset($_POST['edit_post']))
			{
				if($_FILES['file']['name'] == '')
				{
					$title = $_POST['title'];
					$other = new Other();
					$unsigned_title = $other->changeTitle($title);
					$excerpt = $_POST['excerpt'];
					$url_image = "upload/image/".$_FILES['file']['name'];
					$content = $_POST['editor1'];
					$highlight = $_POST['highlight'];
					$date = $_POST['date'];	
					$id_category = $_POST['category'];
					$id_user = $_SESSION['id_user'];
					$view = 0;
					$public = 1;
					$array = array($id_post, $title, $unsigned_title, $excerpt, $url_image, $date, $id_user, $content,$id_category, $view, $highlight, $public);
					$this->Edit_Post_Not_Change_Avata($array);
					return true;
				}
				else
				{
					$other = new Other();
					$url_image = $other->Upload_File();
					if( $url_image != null)
					{
						$title = $_POST['title'];
						$other = new Other();
						$unsigned_title = $other->changeTitle($title);
						$excerpt = $_POST['excerpt'];
						$content = $_POST['editor1'];
						$highlight = $_POST['highlight'];
						$date = $_POST['date'];	
						$id_category = $_POST['category'];
						$id_user = $_SESSION['id_user'];
						$view = 0;
						$public = 1;
						$array = array($id_post, $title, $unsigned_title, $excerpt, $url_image, $date, $id_user, $content,$id_category, $view, $highlight, $public);
						$this->Edit_Post($array);
						return true;
					}
					else return false;
				}
			}
		}
		
		function Draft_New($id_post)
		{
			if(isset($_POST['add_post']))
			{
				$other = new Other();
				$url_image = $other->Upload_File();
				if($url_image != null)
				{
					$title = $_POST['title'];
					$unsigned_title = $other->changeTitle($title);
					$excerpt = $_POST['excerpt'];
					$content = $_POST['editor1'];
					$highlight = $_POST['highlight'];
					$date = $_POST['date'];	
					$id_category = $_POST['category'];
					$id_user = $_SESSION['id_user'];
					$view = 0;
					$public = 0;
					$array = array($id_post, $title, $unsigned_title, $excerpt, $url_image, $date, $id_user, $content,$id_category, $view, $highlight, $public);
					$this->Add_Post($array);
				}
			}
		}
		
		function Draft_Edit($id_post)
		{
			if(isset($_POST['edit_post']))
			{
				if($_FILES['file']['name'] == '')
				{
					$title = $_POST['title'];
					$other = new Other();
					$unsigned_title = $other->changeTitle($title);
					$excerpt = $_POST['excerpt'];
					$url_image = "upload/image/".$_FILES['file']['name'];
					$content = $_POST['editor1'];
					$highlight = $_POST['highlight'];
					$date = $_POST['date'];	
					$id_category = $_POST['category'];
					$id_user = $_SESSION['id_user'];
					$view = 0;
					$public = 0;
					$array = array($id_post, $title, $unsigned_title, $excerpt, $url_image, $date, $id_user, $content,$id_category, $view, $highlight, $public);
					$this->Edit_Post_Not_Change_Avata($array);
					return true;
				}
				else
				{
					$other = new Other();
					$url_image = $other->Upload_File();
					if( $url_image != null)
					{
						$title = $_POST['title'];
						$other = new Other();
						$unsigned_title = $other->changeTitle($title);
						$excerpt = $_POST['excerpt'];
						$content = $_POST['editor1'];
						$highlight = $_POST['highlight'];
						$date = $_POST['date'];	
						$id_category = $_POST['category'];
						$id_user = $_SESSION['id_user'];
						$view = 0;
						$public = 0;
						$array = array($id_post, $title, $unsigned_title, $excerpt, $url_image, $date, $id_user, $content,$id_category, $view, $highlight, $public);
						$this->Edit_Post($array);
						return true;
					}
					else return false;
				}
			}
		}
		
		function Count_Post()
		{
			$model = new Post_Blog();
			return $model->Count_Post();
		}
		
		function View_Visit()
		{
			$model = new Post_Blog();
			return $model->View_Visit();
		}
		function Count_View($id_post)
		{
			$model = new Post_Blog();
			return $model->Count_View($id_post);
		}
	}
?>