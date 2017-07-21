<?php 
	require_once("connect.php");
	class Post_Blog
	{
		private $id_post;
		public $title;
		public $usingned_title;
		public $excerpt;
		public $url_img;
		public $date;
		public $id_user;
		public $content;
		public $id_type;
		public $view;
		public $highlights;
		public $public;
		
		//Start get, set contructor 
		public function getId_post()
		{
			return $id_post;
		}
		public function setId_post($value)
		{
			$this->id_potst = $value;
		}
		//End get, set contructor
		
		function List_Post()
		{
			$mysqli = new Connect();
			return mysqli_query($mysqli->connect(), "select * from post order by id_post desc");
		}
		
		function List_Post_Draft()
		{
			$mysqli = new Connect();
			return mysqli_query($mysqli->connect(), "select * from post where public = '0' order by id_post desc");
		}
		
		function Info_Post($id_post)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from post where id_post='$id_post'");
			return $x->fetch_array();
		}
		function Info_ID_Category($id_post)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from post where id_post='$id_post'");
			$row = $x->fetch_array();
			return $row['id_type'];
		}
		
		function Info_Max_ID()
		{
			$mysqli = new Connect();
			try
			{
				$x = mysqli_query($mysqli->connect(), "select * from post order by id_post desc");
				$result = $x->fetch_array();
				return $result["id_post"] +1;
			}
			catch(Exception $e){
				echo "Error: ".$e->getMessage();
			}
			return 1;
		}
		
		function Add_Post($post)
		{
			$mysqli = new Connect();
			try
			{
				$query="INSERT INTO `post`(`id_post`, `title`, `unsigned_title`, `excerpt`, `url_image`, `date`, `id_user`, `content`, `id_type`, `view`, `highlights`, `public`) VALUES ('{0}','{1}','{2}','{3}','{4}','{5}','{6}','{7}','{8}','{9}','{10}','{11}')";
				foreach($post as $key => $values)
				{
					$str = "{".$key."}";
					$query = str_replace("$str",$values, $query);
				}
				mysqli_query($mysqli->connect(), $query);
			}
			catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
		
		function Edit_Post($post)
		{
			$mysqli = new Connect();
			try
			{
				$query="UPDATE `post` SET `title`={1},`unsigned_title`={2},`excerpt`={3},`url_image`={4},`date`={5},`id_user`={6},`content`={7},`id_type`={8},`view`={9},`highlights`={10},`public`={11} WHERE `id_post`={0}";
				foreach($post as $key => $values)
				{
					$str = "{".$key."}";
					$str_replace = "'".$values."'";
					$query = str_replace("$str",$str_replace, $query);
				}
				mysqli_query($mysqli->connect(), $query);
			}
			catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
		
		function Edit_Post_Not_Change_Avata($post)
		{
			$mysqli = new Connect();
			try
			{
				$query="UPDATE `post` SET `title`={1},`unsigned_title`={2},`excerpt`={3},`date`={5},`id_user`={6},`content`={7},`id_type`={8},`view`={9},`highlights`={10},`public`={11} WHERE `id_post`={0}";
				foreach($post as $key => $values)
				{
					$str = "{".$key."}";
					$str_replace = "'".$values."'";
					$query = str_replace("$str",$str_replace, $query);
				}
				mysqli_query($mysqli->connect(), $query);
			}
			catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
		
		function Del_Post($id_post)
		{
			$mysqli = new Connect();
			try{
				mysqli_query($mysqli->connect(), "delete from post where id_post='$id_post'");
			}catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}

		function Count_Post()
		{
			$mysqli = new Connect();
			$x =  mysqli_query($mysqli->connect(), "select * from post");
			return mysqli_num_rows($x);
		}
		
		function View_Visit()
		{
			$mysqli = new Connect();
			$x =  mysqli_query($mysqli->connect(), "SELECT * FROM `analytic_clinet`");
			return mysqli_num_rows($x);
		}
	}
?>