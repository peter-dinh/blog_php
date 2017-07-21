<?php 
	require_once('controls/title_control.php');
	$title = new Title_Blog();
?>
<section class="content-header">
      <h1>
        <?php echo $title->Title(); ?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="<?php echo $title->Icon_Title(); ?>"></i> Home</a></li>
        <li class="active"><?php  echo $title->Title(); ?></li>
      </ol>
</section>