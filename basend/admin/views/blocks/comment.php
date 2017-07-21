<?php
	require_once('controls/comment_control.php');
	require_once('controls/post_control.php');
	require_once('controls/category_control.php');

	$category = new Category_Control();
	$post = new Post_Control();
	$comment = new Comment_Control();
	$comment->Update_New_Comment();// update new comment
	$list_comment = $comment->List_Comment();
?>
 

 <section class="content">
  <div class="row">
	<div class="col-xs-12">

	  <div class="box">
		<div class="box-header">
		  <h3 class="box-title">Data Table Comment</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		  <table id="example1" class="table table-bordered table-striped">
			<thead>
			<tr>
			  <th>ID</th>
			  <th>Name</th>
			  <th>Email</th>
			  <th>Website</th>
			  <th>Cotent</th>
			  <th>Date</th>
			  <th>Post</th>
			  <th>Tool</th>
			</tr>
			</thead>
			<tbody>
			<?php 
				while($row = $list_comment->fetch_array())
				{
					$id_category = $post->Info_ID_Category($row['id_post']);// get id_category use link a
					$unsigned_name = $category->Info_Unsigned_Name($id_category);
					$title = $comment->Title_Post($row['id_post']);
				?>
			<tr>
			  <td><?php echo $row['id'] ?></td>
			  <td><a href="../index.php?category=<?php echo $unsigned_name; ?>&id=<?php echo $row['id_post'] ?>" target="_blank"><?php echo $row['name'] ?></a></td>
			  <td><?php echo $row['email'] ?></td>
			  <td><?php echo $row['website'] ?></td>
			  <td><?php echo $row['content'] ?></td>
			  <td><?php echo $row['date'] ?></td>
			  <td><a href="../index.php?action=post&id=<?php echo $row['id_post']; ?>"><?php echo $title; ?></a></td>
			  <td><button type="button" id="del_post" onclick="location.href = 'index.php?menu=comment&del=<?php echo $row['id'] ?>';" class="btn btn-danger">Del</button></td>
			</tr>
			<?php
					
				}
				?>
			</tbody>
			<tfoot>
			<tr>
			  <th>ID</th>
			  <th>Name</th>
			  <th>Email</th>
			  <th>Website</th>
			  <th>Cotent</th>
			  <th>Date</th>
			  <th>Post</th>
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
	if(isset($_GET['del']) && isset($_GET['menu']) == "comment")
	{
		$x = $_GET['del'];
		$comment->Del_Comment($x);
		header("Location: index.php?menu=comment");
	}
?>

<style>
#del_post
	{
		margin-left: 10%;
		margin-right: 10%;
	}
#example1_filter
	{
		float: right;	
	}
</style>