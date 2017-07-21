<?php 
	require_once('controls/category_control.php');
	$category = new Category_Control();
	$list_category = $category->List_Category();
?>
 	

<section class="content">
  	<div class="row">
		<div class="col-xs-9">
	  		<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Data Table Category Post</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
		  			<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
							  <th>ID</th>
							  <th>Name</th>
							  <th>Unsigned</th>
							  <th>Show</th>
							  <th>Tool</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while($row = $list_category->fetch_array())
								{
									ob_start();
							?>
							<tr>
							  <td>{ID}</td>
							  <td><a href="index.php?menu=post&post=edit&id={id_post}">{Name}</a></td>
							  <td>{Unsigned}</td>
							  <td>{Show}</td>
							  <td><button type="button" id="edit_post" onclick="location.href = 'index.php?menu=post&post=edit&id={id_post}';" class="btn btn-warning ">Edit</button><button type="button" id="del_post" onclick="location.href = 'index.php?menu=post&post=all&del={id_post}';" class="btn btn-danger">Del</button></td>
							</tr>
							<?php
									$s = ob_get_clean();
									$s = str_replace("{ID}", $row['id'], $s);
									$s = str_replace("{Name}", $row['name'], $s);
									$s = str_replace("{Unsigned}", $row['unsigned_name'], $s);
									$s = str_replace("{Show}", $row['show'], $s);
									echo $s;
								}
							?>
						</tbody>
						<tfoot>
							<tr>
							  <th>ID</th>
							  <th>Name</th>
							  <th>Unsigned</th>
							  <th>Show</th>
							  <th>Tool</th>
							</tr>
						</tfoot>
		  			</table>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- /.col -->
			<form role="form" method="post" enctype="multipart/form-data">
			<div class="col-xs-3">
				<div class="box">
					<div class="box-header">
					  <h3 class="box-title">Edit Category</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="form-group">
					  		<label for="name">Name Catagory:</label>
						  	<input type="text" name="name" class="form-control" placeholder="Name ...">
						</div>
						
						<div class="form-group">
					  		<label for="name">Unsigned Catagory:</label>
						  	<input type="text" name="unsigned_name" class="form-control" placeholder="Unsigned Name ...">
						</div>

						<!-- select -->
						<div class="form-group">
						  <label>Show</label>
						  <select class="form-control">
							<option value="1" >True</option>
							<option value="0" >Flase</option>
						  </select>
						</div>
						
					</div>
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-primary">New Category</button>	
					</div>
				</div>
  			</div>
  			</form>
	</div>
  <!-- /.row -->
</section>
<!-- /.content -->





<style>
#edit_post
	{
		margin-left: 10%;
		margin-right: 10%;
	}
#example1_filter
	{
		float: right;	
	}
</style>