<?php 

	class Menu_Blog
	{
		public function set_Menu_Content()
		{
			if(isset($_GET['menu']))
			{
				$select = $_GET['menu'];
				
				switch($select)
				{
					case 'home':
						include("views/blocks/dashboard.php");
						break;
					case 'post' :
						include("views/blocks/post.php");
						break;
					case 'comment':
						include("views/blocks/comment.php");
						break;
					case 'account' :
						include("views/blocks/account.php");
						break;
					case 'mail':
						include("views/blocks/mail.php");
						break;
					case 'setup':
						include("views/blocks/setup.php");
						break;
					case 'profile':
						include("views/blocks/profile.php");
						break;
					default :
						include("views/blocks/404.php");
						break;
				}
			}
			else
				include("views/blocks/dashboard.php");
		}
		
		public function set_Menu_Post()
		{
			if(isset($_GET['post']))
			{
				$select = $_GET['post'];
				switch ($select)
				{
					case 'all':
						include("views/blocks/post/list_post.php");
						break;
					case  'new':
						include("views/blocks/post/new_post.php");
						break;
					case  'edit':
						include("views/blocks/post/edit_post.php");
						break;
					case 'category':
						include("views/blocks/post/category.php");
						break;
					case 'draft':
						include("views/blocks/post/draft.php");
						break;
					default :
						include("views/blocks/404.php");
						break;
				}
			}
			else
				include("views/blocks/post/list_post.php");
		}
		

		public function set_Menu_Account()
		{
			if(isset($_GET['account']))
			{
				$select = $_GET['account'];
				switch ($select)
				{
					case 'all':
						include("views/blocks/account/list_account.php");
						break;
					case 'new':
						include("views/blocks/account/new_account.php");
						break;
					case 'edit':
						include("views/blocks/account/edit_account.php");
						break;
					case 'pass':
						include("views/blocks/account/change_pass.php");
						break;
					default :
						include("views/blocks/404.php");
						break;
				}
			}
			else
				include("views/blocks/account/list_account.php");
		}
		
		
		public function set_Menu_Mail()
		{
			if(isset($_GET['mail']))
			{
				$select = $_GET['mail'];
				switch ($select)
				{
					case 'inbox':
						include("views/blocks/mail/inbox.php");
						break;
					case 'compose':
						include("views/blocks/mail/compose.php");
						break;
					case 'read':
						include("views/blocks/mail/read.php");
						break;
					default :
						include("views/blocks/404.php");
						break;
				}
			}
			else
				include("views/blocks/mail/inbox.php");
		}
		
		
		public function set_Menu_Setup()
		{
			if(isset($_GET['setup']))
			{
				$select = $_GET['setup'];
				switch ($select)
				{
					case 'basic':
						include("views/blocks/setup/basic.php");
						break;
					case 'post':
						include("views/blocks/setup/post.php");
						break;
					case 'page':
						include("views/blocks/setup/page.php");
						break;
					case 'account':
						include("views/blocks/setup/account.php");
						break;
					case 'mail':
						include("views/blocks/setup/mail.php");
						break;
					default :
						include("views/blocks/404.php");
						break;
				}
			}
			else
				include("views/blocks/setup/basic.php");
		}
		
	}
	
?>