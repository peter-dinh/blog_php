
<?php 
	require_once('controls/post_control.php');
	require_once('controls/category_control.php');
	$post = new Post_Control();
	$Category = new Category_Control();
	$list_Category = $Category->List_Category();
	if(isset($_GET["id"]))
	{
		$info_post = $post->Info_Post($_GET['id']);
	}
?>

<?php

	if(isset($_POST['edit_post']))
	{
		
		$id_post = $_GET['id'];
		if($post->POST_EDIT( $id_post) == true)
			header("Refresh:0");
			
	}
?>


<?php 

	// ckech $_get[id] esxist
	if(isset($_GET['id']))
	{
		if($info_post == null)
			include 'views/blocks/404.php';
		else
		{
?>
<!-- Main content -->
 <section class="content">


	<div class="row">
	<form role="form" method="post" action="index.php?menu=post&post=edit&id=<?php echo $_GET['id'] ?>" enctype="multipart/form-data">
	<div class="col-md-12">
	  <div class="box box-warning">
		<div class="box-header with-border">
		  <h3 class="box-title">Edit Post</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<!-- text input -->
			<div class="form-group">
			  <input type="text" name="title" class="form-control" value='<?php if(isset($_GET['id'])) echo $info_post["title"]; ?>' placeholder="Title ...">
			</div>
			<!-- textarea -->
			<div class="form-group">
			  <label>Excerpt</label>
			  <textarea class="form-control" name="excerpt" rows="3" placeholder="Excerpt ..."><?php if(isset($_GET['id'])) echo $info_post["excerpt"]; ?></textarea>
			</div>

			<div class="form-group">
				<form method="post" action="index.php?menu=post&post=edit&id=<?php echo $_GET['id'] ?>" id="form">
					<label>Upload Image</label>
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
								Browse… <input type="file" value="<?php if(isset($_GET['id'])) echo $info_post['url_image']; ?>" name="file" id="imgInp">
							</span>
						</span>
						<input type="text" class="form-control" readonly>
					</div>
					<img src="<?php if(isset($_GET['id'])) echo $info_post['url_image']; ?>" id='img-upload'/>
				</form>
			</div>
			<label for="editor1">Content</label>
			<div class="box-body pad">
			  <textarea id="editor1" name="editor1" rows="10" cols="80">
						<?php if(isset($_GET['id'])) echo $info_post["content"]; else echo "This is my textarea to be replaced with CKEditor."; ?>
			  </textarea>
			</div>

			<!-- select -->
			<div class="form-group">
			  <label>Highlights</label>
			  <select class="form-control" name="highlight">
				<option value="1" <?php if(isset($_GET['id']))if($info_post["highlights"] ==1) echo "selected"; ?> >True</option>
				<option value="0" <?php if(isset($_GET['id']))if($info_post["highlights"] ==0) echo "selected"; ?> >Flase</option>
			  </select>
			</div>
			
			
			<div class="form-group">
					<label>Date:</label>
					<div class="input-group date">
					  <div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					  </div>
					  <input type="text" name="date" value="<?php if(isset($_GET['id'])) echo $info_post["date"]; else echo date("Y-m-d"); ?>" class="form-control pull-right" id="datepicker1">
					</div>
				</div>
				<div class="form-group">
				  <label>Category:</label>
				  <select class="form-control" name="category">
				  	<?php
					  	while($row = $list_Category->fetch_array())
						{
							ob_start();
					  ?>
					<option value="{value}">{text}</option>
					<?php
							$s = ob_get_clean();
							$s = str_replace("{value}", $row["id"], $s);
							$s = str_replace("{text}", $row["name"], $s);
							echo $s;
						}
					  ?>
				  </select>
				</div>
		</div>
		<!-- /.box-body -->
		<div class="box-footer">
		  <button type="submit" name="edit_post" class="btn btn-primary"><?php if(isset($_GET['id'])) echo "Edit Post"; else echo "New Post"; ?></button>
		  <button type="submit" name="draft"  style="float: right;" class="btn btn-primary">Draft</button>
		</div>
	  </div>
	 </div>
</div>

  <!-- ./row -->
</section>



<?php
		}
	}
	 ?>


<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    width: 50%;
}	 
</style>