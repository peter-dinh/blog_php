
<?php 
	require_once('controls/post_control.php');
	require_once('controls/category_control.php');
	$post = new Post_Control();
	$category = new Category_Control();
	$list_category = $category->List_Category();
?>

<?php 
	if(isset($_POST['add_post']))
	{
		$id_post = $post->Info_Max_ID();
		$post->POST_ADD( $id_post);
		header("Refresh:0");
	}
?>

<?php 
	if(isset($_POST['draft']))
	{
		$id_post = $post->Info_Max_ID();
		echo $id_post;
		$post->Draft_New( $id_post);
		
	}
?>
<!-- Main content -->
<section class="content">
	<div class="row">
		<form role="form" method="post" enctype="multipart/form-data">
			<div class="col-md-12">
	  			<div class="box box-warning">
					<div class="box-header with-border">
					  <h3 class="box-title">New Post</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<!-- text input -->
						<div class="form-group">
						  <input type="text" name="title" class="form-control" placeholder="Title ...">
						</div>
						<!-- textarea -->
						<div class="form-group">
						  <label>Excerpt</label>
						  <textarea class="form-control" name="excerpt" rows="3" placeholder="Excerpt ..."></textarea>
						</div>

						<div class="form-group">
							<form method="post">
								<label>Upload Image</label>
								<div class="input-group">
									<span class="input-group-btn">
										<span class="btn btn-default btn-file">
											Browse… <input type="file" name="file" id="imgInp">
										</span>
									</span>
									<input type="text" class="form-control" readonly>
								</div>
								<img id='img-upload'/>
							</form>
						</div>
						
						
						<label for="editor1">Content</label>
						<div class="box-body pad">
						  <textarea id="editor1" name="editor1" >
									This is my textarea to be replaced with CKEditor.
						  </textarea>
						</div>

						<!-- select -->
						<div class="form-group">
						  <label>Highlights</label>
						  <select class="form-control" name="highlight">
							<option value="1" >True</option>
							<option value="0" >Flase</option>
						  </select>
						</div>
			
			
						<div class="form-group">
							<label>Date:</label>
							<div class="input-group date">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="text" name="date" value="<?php echo date("Y-m-d"); ?>" class="form-control pull-right" id="datepicker1">
							</div>
						</div>
						
						<div class="form-group">
						  <label>Category:</label>
						  <select class="form-control" name="category">
						  <?php 
							  	while($row = $list_category->fetch_array())
								{
							  ?>
							<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
							<?php }?>
						  </select>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="submit" name="add_post" class="btn btn-primary">New Post</button>
						
						<button type="submit" name="draft"  style="float: right;" class="btn btn-primary">Draft</button>
					</div>
				</div>
			</div>
		</form>
	</div>
  <!-- ./row -->
</section>



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