<?php 
	require_once('connect.php');
	class Widget_Model_Clinet
	{
		
		function List_Admin()
		{
			$mysqli = new Connect_Clinet();
			return mysqli_query($mysqli->connect(), "select * from account where type_account = '1'");
		}
		
		function Info_Author($id_user)
		{
			$mysqli = new Connect_Clinet();
			return mysqli_fetch_array(mysqli_query($mysqli->connect(), "select * from account where id = '$id_user'"));
		}

		function Total_Visit()
		{
			$mysqli = new Connect_Clinet();
			$ip = $_SERVER['REMOTE_ADDR'];
			$update = mysqli_query($mysqli->connect(), "INSERT INTO `analytic_clinet`( `ip`) VALUES ('$ip')");
			$x = mysqli_query($mysqli->connect(), "SELECT count(*) as total FROM `analytic_clinet`");
			$row = $x->fetch_array();
			return $row["total"];
		}

		function Count_Online()
		{
			$mysqli = new Connect_Clinet();
			$time = time();
			$time_out = 120;
			$time_new = $time - $time_out;
			$ip = $_SERVER['REMOTE_ADDR'];
			$local_page = $_SERVER['PHP_SELF'];
			mysqli_query($mysqli->connect(),"INSERT INTO `count_online`(`time`, `ip`, `local_page`) VALUES ('$time','$ip','$local_page')");
			mysqli_query($mysqli->connect(),"delete from count_online where time < $time_new");
			$x = mysqli_num_rows(mysqli_query($mysqli->connect(),"select distinct ip from count_online"));
			return $x;
		}
	}
?>