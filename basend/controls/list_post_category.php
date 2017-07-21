<?php 
	require_once('post_control.php');
	require_once('category_control.php');
	
	class List_Post_Category
	{
		function List_Post()
		{
			if(isset($_GET['category']))
			{
				$post = new Post_Control_Clinet();
				$category = new Category_Control_Clinet();
				
				$id_category = $category->Get_ID_Category($_GET['category']);
				if($id_category != null)
				{
					if(!isset($_GET['start']))
						$start = 0;
					else 
						$start = $_GET['start'];

					$list_post_category = $post->List_Post_By_Category($id_category, $start);
					return $list_post_category;
				}
				else 
					return false;
			}
		}
		
		function Get_ID_Category($category)
		{
			$control = new Category_Control_Clinet();
			return $control->Get_ID_Category($category);
		}
		
		
		function Get_Next($start)
		{
			if($start - 10 < 0 || !isset($_GET['start'])) return 0;
			else
			return $start - 10;
		}
		
		function Get_Prew($id_category, $start)
		{
			$post = new Post_Control_Clinet();
			
			$count_post = $post->Count_Post_By_Category($id_category);
			
			if($start + 10 > $count_post) return $count_post;
			else
			return $start + 10;
		}
		
		function Count_Post_By_Category($id_category)
		{
			$control = new Post_Control_Clinet();
			return $control->Count_Post_By_Category($id_category);
		}
		
		function Get_Name_Category($category)
		{
			$control = new Category_Control_Clinet();
			return $control->Get_Name_Category($category);
		}
		
		function List_Post_New()
		{
			$control = new Post_Control_Clinet();
			return $control->List_Post_New();
		}
		
		function Get_Unsigned_Title($id_category)
		{
			$control = new Post_Control_Clinet();
			return $control->Get_Unsigned_Title($id_category);
		}
		function Get_ID_Category2($id_post)
		{
			$control = new Post_Control_Clinet();
			return $control->Get_ID_Category2($id_post);
		}
	}
?>