<?php 
	class Connect_Clinet
	{
		public $mysqli;
		
		function connect()
		{
			$this->mysqli = mysqli_connect("localhost","peterdinh018","","c9") or die("connect die");
			return $this->mysqli;
		}
		
		function close()
		{
			mysql_close($this->mysqli);
		}
	}
?>