<?php 
	require_once('controls/post_control.php');
	$post = new Post_Control();
	$list_post = $post->List_Post_Draft();
?>
<!-- Main content -->
<section class="content">
  <div class="row">
	<div class="col-xs-12">

	  <div class="box">
		<div class="box-header">
		  <h3 class="box-title">Data Table Draft Post</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		  <table id="example1" class="table table-bordered table-striped">
			<thead>
			<tr>
			  <th>ID</th>
			  <th>Title</th>
			  <th>Date</th>
			  <th>Author</th>
			  <th>Type Post</th>
			  <th>View</th>
			  <th>Highlights</th>
			  <th>Tool</th>
			</tr>
			</thead>
			<tbody>
			<?php
				while($row = $list_post->fetch_array())
				{
					ob_start();
			?>
			<tr>
			  <td>{id_post}</td>
			  <td><a href="index.php?menu=post&post=edit&id={id_post}">{title}</a></td>
			  <td>{date}</td>
			  <td>{author}</td>
			  <td>{type}</td>
			  <td>{view}</td>
			  <td>{highlights}</td>
			  <td><button type="button" id="edit_post" onclick="location.href = 'index.php?menu=post&post=edit&id={id_post}';" class="btn btn-warning ">Edit</button><button type="button" id="del_post" onclick="location.href = 'index.php?menu=post&post=all&del={id_post}';" class="btn btn-danger">Del</button></td>
			</tr>
			<?php
					$s = ob_get_clean();
					$s = str_replace("{id_post}",$row["id_post"],$s);
					$s = str_replace("{title}",$row["title"],$s);
					$s = str_replace("{date}",$row["date"],$s);
					$s = str_replace("{author}",$row["id_user"],$s);
					$s = str_replace("{type}",$row["id_type"],$s);
					$s = str_replace("{view}",$row["view"],$s);
					$s = str_replace("{highlights}",$row["highlights"],$s);
					echo $s;
				}
					?>
			</tbody>
			<tfoot>
			<tr>
			  <th>ID</th>
			  <th>Title</th>
			  <th>Date</th>
			  <th>Author</th>
			  <th>Type Post</th>
			  <th>View</th>
			  <th>Highlights</th>
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
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<?php 
	if(isset($_GET['del']) && isset($_GET['menu']) == "post")
	{
		$x = $_GET['del'];
		$post->Del_Post($x);
		header("Location: index.php?menu=post&post=all");
	}
?>

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




