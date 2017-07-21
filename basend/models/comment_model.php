<?php 
	require_once('connect.php');
	class Comment_Model_Clinet
	{
		function List_Comment($id_post)
		{
			$mysqli = new Connect_Clinet();
			return mysqli_query($mysqli->connect(), "select * from comment where id_post = '$id_post' order by id desc ");
		}
		
		function Count_Comment($id_post)
		{
			$mysqli = new Connect_Clinet();
			$x = mysqli_query($mysqli->connect(), "select * from comment where id_post = '$id_post' order by id desc ");
			return mysqli_num_rows($x);
		}
		
		function Get_ID_Max_Comment()
		{
			$mysqli = new Connect_Clinet();
			$x = mysqli_query($mysqli->connect(), "select * from comment order by id desc");
			$num = $x->fetch_array();
			return $num['id'] +1;
		}
		
		function Add_Comment($id_coment)
		{
			if(isset($_GET['id']))
			{
				if(isset($_POST['add_comment']))
				{
					$id_post = $_GET['id'];
					$name = $_POST['name'];
					$email = $_POST['email'];
					$website = $_POST['website'];
					$content = $_POST['content'];
					$date = date("Y-m-d h:i:sa");
					$mysqli = new Connect_Clinet();
					return mysqli_query($mysqli->connect(), "INSERT INTO `comment`(`id`, `name`, `email`, `website`, `content`, `date`, `id_post`,`see`) VALUES ('$id_coment','$name','$email','$website','$content','$date','$id_post','0')");
				}
			}
		}
		
	}
?>