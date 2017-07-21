<?php 
	require_once('connect.php');
	class Post_Model_Clinet
	{
		
		function Info_Post($id_post)
		{
			$mysqli = new Connect_Clinet();
			return mysqli_query($mysqli->connect(), "select * from post where id_post='$id_post'");
		}
		
		function List_Post_New()
		{
			$mysqli = new Connect_Clinet();
			return mysqli_query($mysqli->connect(), "select * from post order by date desc limit 5");
		}
		function List_Post_Popular()
		{
			$mysqli = new Connect_Clinet();
			return mysqli_query($mysqli->connect(), "select * from post order by view desc limit 5");
		}
		function List_Post_HighLight()
		{
			$mysqli = new Connect_Clinet();
			return mysqli_query($mysqli->connect(), "select * from post where highlights = '1' order by date desc limit 5");
		}
		function List_Post_By_Category($id_category,$start)
		{
			$mysqli = new Connect_Clinet();
			return mysqli_query($mysqli->connect(), "select * from post where id_type = '$id_category' order by date desc limit $start, 10");
		}
		
		function Count_Post_By_Category($id_category)
		{
			$mysqli = new Connect_Clinet();
			$x = mysqli_query($mysqli->connect(), "select * from post where id_type = '$id_category'");
			return mysqli_num_rows($x);
			
		}
		function Get_Unsigned_Title($id_category)
		{
			$mysqli = new Connect_Clinet();
			$x = mysqli_query($mysqli->connect(), "select * from category where id = '$id_category'");
			$row = $x->fetch_array();
			return $row['unsigned_name'];	
		}
		function Get_ID_Category2($id_post)
		{
			$mysqli = new Connect_Clinet();
			$x = mysqli_query($mysqli->connect(), "select * from post where id_post = '$id_post'");
			$row = $x->fetch_array();
			return $row['id_type'];
		}
		function Count_View($id_post)// update view new and get count view
		{
			$mysqli = new Connect_Clinet();
			$x = mysqli_query($mysqli->connect(), "select * from post where id_post = '$id_post'");
			$row = $x->fetch_array();
			$view = $row['view'] + 1;
			mysqli_query($mysqli->connect(), "update post set view = '$view' where id_post = '$id_post'");
			return $view;
			
		}
	}
?>	