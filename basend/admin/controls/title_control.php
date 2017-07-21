<?php 
	class Title_Blog
	{
		function Title()
		{
			if(isset($_GET['menu']))
			{
				$title = $_GET['menu'];
				switch($title)
				{
					case 'home':
						return "Dashboard";
					case 'post' :
						return "Post";
					case 'comment':
						return "Comment";
					case 'account' :
						return "Account";
					case 'mail':
						return "Mail";
					case 'setup':
						return "Setup";
					case 'profile':
						return "Profile";
					default :
						return "404 Error";
						break;
				}
			}
			else
				return "Dashboard";
		}
		
		function Icon_Title()
		{
			if(isset($_GET['menu']))
			{
				$title = $_GET['menu'];
				switch($title)
				{
					case 'home':
						return "fa fa-dashboard";
					case 'post' :
						return "fa fa-edit";
					case 'comment':
						return "fa fa-bullhorn";
					case 'account' :
						return "ion ion-person-add";
					case 'mail':
						return "fa fa-envelope";
					case 'setup':
						return "fa fa-wrench";
					case 'profile':
						return "fa fa fa-user";
					default:
						return "fa fa-warning text-yellow";
				}
			}
			else
				return "fa fa-dashboard";
		}
		

	}
?>