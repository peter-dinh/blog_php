<div class="content-wrapper">
	<?php include("views/blocks/title.php") ?>
	<?php 
		require_once('controls/menu_control.php');
		$menu = new Menu_Blog();
		$menu->set_Menu_Content();
	?>
</div>