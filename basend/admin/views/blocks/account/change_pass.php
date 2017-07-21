
<?php 
	require_once('controls/account_control.php');
	$account = new Account_Control();
	$list_account = $account->List_Account();
	
?>

<?php 
	if(isset($_POST['change_pass']))
	{
		$strig_account = $_POST['mail'];
		$pass_new = $_POST['pass_new'];
		$change = 1;
		if($strig_account == '') {echo "<div class=\"alert alert-warning\"><strong>Warning!</strong> Email is null.</div>"; $change = 0;}
		if($pass_new == '') {echo "<div class=\"alert alert-warning\"><strong>Warning!</strong> Password New is null.</div>";$change = 0;}
		
		if($change == 1)
		{
			$x = $account->Change_Pass($pass_new,$strig_account);
				echo "<div class=\"alert alert-success\"><strong>Success!</strong> Change Password successful</div>";
		}
		
	}
?>

<!-- Main content -->
 <section class="content">
	<div class="row">
	<form role="form" method="post" enctype="multipart/form-data">
	  <div class="col-md-4">
	  	<div class="box">
	  		<div class="box-header with-border">
			  	<h3 class="box-title">Change Pass</h3>
			</div>
			<div class="box-body">
				<!-- text input -->
				<div class="form-group">
				  <label>Email</label>
				  <select class="form-control"  name="mail" >
				  <?php 
					  	while($row = $list_account->fetch_array())
						{
					  ?>
					<option value="<?php echo $row['mail']; ?>"  ><?php echo $row['mail']; ?></option>
					<?php } ?>
				  </select>
				</div>
				<div class="form-group">
				  <label for="pass">New Password</label>
				  <input type="text" name="pass_new" class="form-control" placeholder="New Password ...">
				</div>
			</div>
			<div class="box-footer">
			  <button type="submit" name="change_pass" class="btn btn-primary">Change Password</button>
			</div>
		</div>
	</form>
</div>

  <!-- ./row -->
</section>
