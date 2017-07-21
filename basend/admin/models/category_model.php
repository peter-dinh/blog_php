<?php 
	require_once("connect.php");
	class Category_Blog
	{
		public $id;
		public $name;
		public $unsigned_name;
		public $serial;
		public $show;
		
		function List_Category()
		{
			$mysqli = new Connect();
			return mysqli_query($mysqli->connect(), "select * from category order by id desc");
		}
		
		function Info_Category($id)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from category where id='$id'");
			return $x->fetch_array();
		}
		
		function Info_Max_ID()
		{
			$mysqli = new Connect();
			try
			{
				$x = mysqli_query($mysqli->connect(), "select * from category order by id_post desc");
				$result = $x->fetch_array();
				return $result["id"] +1;
			}
			catch(Exception $e){
				echo "Error: ".$e->getMessage();
			}
			return 1;
		}
		
		function Info_Unsigned_Name($id_category)
		{
			$mysqli = new Connect();
			$x = mysqli_query($mysqli->connect(),"select * from category where id='$id_category'");
			$row =  $x->fetch_array();
			return $row['unsigned_name'];
		}
		
		function Add_Category($category)
		{
			$mysqli = new Connect();
			try
			{
				$query="INSERT INTO `category`(`id`, `name`, `unsigned_name`, `serial`, `show`) VALUES ({1},{2},{3},{4},{5})";
				foreach($post as $key => $values)
				{
					$query = str_replace("{$key}",$values, $query);
				}
				mysqli_query($mysqli->connect(), $query);
			}
			catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
		
		function Eidt_Category($category)
		{
			$mysqli = new Connect();
			try
			{
				$query="UPDATE `category` SET `name`={2},`unsigned_name`={3},`serial`={4},`show`={5} WHERE `id`={1}";
				foreach($post as $key => $values)
				{
					$query = str_replace("{$key}",$values, $query);
				}
				mysqli_query($mysqli->connect(), $query);
			}
			catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
		
		function Del_Category($id)
		{
			$mysqli = new Connect();
			try{
				mysqli_query($mysqli->connect(), "delete from category where id='$id'");
			}catch(Exception $e)
			{
				echo "Error: ".$e->getMessage();
			}
		}
	}
?>