<?php 
	require_once('connect.php');
	class Comment_Blog
	{
		function List_Comment()
		{
			$mysqli = new Connect();
			return mysqli_query($mysqli->connect(), "select * from comment order by id desc");
		}
		
		function Del_Comment($id_comment)
		{
			$mysqli = new Connect();
			try{
				mysqli_query($mysqli->connect(), "delete from comment where id='$id_comment'");
			}catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
		
		function Info_Comment($id_comment)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from comment where id='$id_comment'");
			return $x->fetch_array();
		}
		
		function Info_Max_ID()
		{
			$mysqli = new Connect();
			try
			{
				$x = mysqli_query($mysqli->connect(), "select * from comment order by id desc");
				$result = $x->fetch_array();
				return $result["id"] +1;
			}
			catch(Exception $e){
				echo "Error: ".$e->getMessage();
			}
			return 1;
		}
		
		function Title_Post($id_post)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from post where id_post='$id_post'");
			$result = $x->fetch_array();
			return $result['title'];
		}
		
		//-----  Use Notify Comment new           --------
		function Count_Comment()
		{
			$mysqli = new Connect();
			$x =  mysqli_query($mysqli->connect(), "select * from comment order by id desc");
			return mysqli_num_rows($x);
		}
		
		function Count_Comment_New()
		{
			$mysqli = new Connect();
			$x =  mysqli_query($mysqli->connect(), "select * from comment where see = 0");
			return mysqli_num_rows($x);
		}
		
		function Update_New_Comment()
		{
			$mysqli = new Connect();
			return mysqli_query($mysqli->connect(), "update comment set see = 1 where see = 0");
		}
		//------------------------------------
	}
?>