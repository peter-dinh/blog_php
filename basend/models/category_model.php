<?php 
	require_once('connect.php');
	class Category_Model_Clinet
	{
		function List_Category()
		{
			$mysqli = new Connect_Clinet();
			return mysqli_query($mysqli->connect(), "select * from category order by id desc");
		}
		
		function Get_ID_Category($category)
		{
			$mysqli= new Connect_Clinet();
			$x =  mysqli_query($mysqli->connect(), "select * from category where unsigned_name = '$category'");
			$row = $x -> fetch_array();
			return $row['id'];
		}
		function Get_Name_Category($category)
		{
			$mysqli= new Connect_Clinet();
			$x =  mysqli_query($mysqli->connect(), "select * from category where unsigned_name = '$category'");
			$row = $x -> fetch_array();
			return $row['name'];
		}
	}
?>