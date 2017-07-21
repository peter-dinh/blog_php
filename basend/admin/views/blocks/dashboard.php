<?php 
	require_once('controls/account_control.php');
	require_once('controls/comment_control.php');
	require_once('controls/post_control.php');

	$account = new Account_Control();
	$post = new Post_Control();
	$comment = new Comment_Control();
?>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-aqua">
		<div class="inner">
		  <h3><?php echo $post->Count_Post(); ?></h3>

		  <p>Post Blog</p>
		</div>
		<div class="icon">
		  <i class="fa fa-edit"></i>
		</div>
		<a href="index.php?menu=post" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-green">
		<div class="inner">
		  <h3><?php echo $comment->Count_Comment (); ?></h3>

		  <p>Comment Post</p>
		</div>
		<div class="icon">
		  <i class="fa fa-bullhorn"></i>
		</div>
		<a href="index.php?menu=comment" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-yellow">
		<div class="inner">
		  <h3><?php echo $account->Count_Account() ?></h3>

		  <p>User Registrations</p>
		</div>
		<div class="icon">
		  <i class="ion ion-person-add"></i>
		</div>
		<a href="index.php?menu=account" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-xs-6">
	  <!-- small box -->
	  <div class="small-box bg-red">
		<div class="inner">
		  <h3><?php echo $post->View_Visit() ?></h3>

		  <p>Unique Visitors</p>
		</div>
		<div class="icon">
		  <i class="fa fa-eye"></i>
		</div>
		<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	  </div>
	</div>
	<!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
	<!-- Left col -->
	<section class="col-lg-7 connectedSortable">
	  <!-- Custom tabs (Charts with tabs)-->

	  <!-- /.nav-tabs-custom -->

	  <!-- Chat box -->

	  <!-- /.box (chat box) -->

	  <!-- TO DO List -->

	  <!-- /.box -->

	  
	  <!-- /.box -->

	</section>
	<!-- right col -->
  </div>
  <!-- /.row (main row) -->