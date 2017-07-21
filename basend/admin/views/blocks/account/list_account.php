<?php
	require_once('controls/account_control.php');
	$account = new Account_Control();
	$list_account = $account->List_Account();
?>
 <section class="content">
  <div class="row">
	<div class="col-xs-12">

	  <div class="box">
		<div class="box-header">
		  <h3 class="box-title">Data Table Account</h3>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
		  <table id="example1" class="table table-bordered table-striped">
			<thead>
			<tr>
			  <th>ID</th>
			  <th>UserName</th>
			  <th>Name</th>
			  <th>Sex</th>
			  <th>Email</th>
			  <th>Type Account</th>
			  <th>Status</th>
			  <th>Tool</th>
			</tr>
			</thead>
			<tbody>
	<?php 
				while($row = $list_account->fetch_array())
				{
				?>
			<tr>
			  <td><?php echo $row["id"]; ?></td>
			  <td><a href="index.php?menu=account&account=edit&id=<?php echo $row["id"]; ?>"><?php echo $row["username"]; ?></a></td>
			  <td><?php echo $row["name"]; ?></td>
			  <td><?php if($row["sex"] == 1) echo "Men"; else echo "Woman" ; ?></td>
			  <td><?php echo $row["mail"]; ?></td>
			  <td><?php if($row["type_account"] == 1) echo "Admin"; else echo "Author" ; ?></td>
			  <td><?php if($row["online"] == 1) echo "Online"; else echo "Offline"; ?></td>
			  <td><button type="button" id="edit_post" onclick="location.href = 'index.php?menu=post&post=edit&id={id_post}';" class="btn btn-warning ">Edit</button><button type="button" id="del_post" onclick="location.href = 'index.php?menu=account&del=<?php echo $row["id"]; ?>';" class="btn btn-danger">Del</button></td>
			</tr>
		<?php 
				}
				?>
			</tbody>
			<tfoot>
			<tr>
			  <th>ID</th>
			  <th>UserName</th>
			  <th>Name</th>
			  <th>Sex</th>
			  <th>Email</th>
			  <th>Type Account</th>
			  <th>Status</th>
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
	if(isset($_GET['del']) && isset($_GET['menu']) == "account")
	{
		$x = $_GET['del'];
		$account->Del_Account($x);
		header("Location: index.php?menu=account&account=all");
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