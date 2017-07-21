<?php 
	require_once('controls/list_post_category.php');
	if(isset($_GET['category']))
		{
			if(!isset($_GET['start']))
				$start = 0;
			else 
				$start = $_GET['start'];
			
			$list_post_category = new List_Post_Category();
			$id_category = $list_post_category->Get_ID_Category($_GET['category']);
			$count = $list_post_category->Count_Post_By_Category($id_category);
			$next = $list_post_category->Get_Next($start);
			$prew = $list_post_category->Get_Prew($id_category, $start);
		}
?>
<div class="section-inner">
	<?php if($prew != $count ) { ?>
	
	<a class="btn btn-cta-secondary" style="<?php if($prew == $count ) echo "visibility: hidden;"; ?>" href="index.php?category=<?php echo $_GET['category']; ?>&start=<?php echo $prew; ?>"><i class="fa fa-chevron-left"></i>Prew</a>
	
	<?php } ?>
	
	<?php if($start != 0 ) { ?>
	<a class="btn btn-cta-secondary" style="<?php if($start == 0) echo "visibility: hidden;"; ?>" href="index.php?category=<?php echo $_GET['category']; ?>&start=<?php echo $next; ?>">Next <i class="fa fa-chevron-right"></i></a>
	<?php } ?>
</div>