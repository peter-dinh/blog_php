<?php 
	class Connect
	{
		public $mysqli;
		
		function connect()
		{
			$this->mysqli = mysqli_connect("localhost","peterdinh018","","c9") or die("connect die");
			mysqli_set_charset ( $this->mysqli , "uft-8" );
			return $this->mysqli;
		}
		
		function close()
		{
			mysql_close($this->mysqli);
		}
	}
?>