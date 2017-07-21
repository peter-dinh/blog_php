<?php 
	require_once('controls/account_control.php');
	$account = new Account_Control();
	if(isset($_GET['id']))
	$info_account =  $account->Info_Account($_GET['id']);
?>
<?php 
	if(isset($_GET['id']))
	{
		if(isset($_POST['edit_account']))
		{
			
			$account->ACCOUNT_EDIT($_GET['id']);
			header("Refresh:0");
		}
	}
	
?>

<?php
	if(isset($_GET['id']))
	{
		if($info_account != null)
		{
			$row = $info_account;
?>
<!-- Main content -->
<section class="content">
	<div class="alert alert-warning">
	  <strong>Edit Account only change role account</strong>
	</div>
	<div class="row">
		<form role="form" method="post" enctype="multipart/form-data">
			<div class="col-md-12">
				<div class="box box-warning">
					<div class="box-header with-border">
					  <h3 class="box-title">Edit Account</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					
						<!-- text input -->
						<div class="form-group">
						  <label for="pass">UserName</label>
						  <input type="text" name="user" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Username ..." readonly>
						</div>
						

						<div class="form-group">
						  <label for="name">Name</label>
						  <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Name ..." readonly >
						</div>
						
						<div class="form-group">
						  <label for="name">Sex</label>
						  <select class="form-control" name="sex" readonly>
							<option value="1" <?php if($row['sex'] == 1) echo "selected"; ?> >Male</option>
							<option value="0" <?php if($row['sex'] == 0) echo "selected"; ?> >Female</option>
						  </select>
						</div>
						
						<div class="form-group">
							<label>Birthday</label>
							<div class="input-group date">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="text" value="<?php echo $row['date'] ?>" name="date" class="form-control pull-right" id="datepicker1" readonly>
							</div>
						</div>
						
						<div class="form-group">
							<form method="post">
								<label>Upload Image</label>
								<div class="input-group">
									<span class="input-group-btn">
										<span class="btn btn-default btn-file">
											Browse… <input type="file" name="file" readonly >
										</span>
									</span>
								</div>
								<img src="<?php echo $row['avatar'] ?>" id='preview'/>
							</form>
						</div>
						
						<div class="form-group">
						  <label for="name">Address</label>
						  <input type="text" value="<?php echo $row['address'] ?>" name="address" class="form-control" placeholder="Address ..." readonly>
						</div>
						
						<div class="form-group">
						  <label for="name">Phone</label>
						  <input type="text" value="<?php echo $row['phone'] ?>" name="phone" class="form-control" placeholder="Phone ..." readonly>
						</div>
						
						<div class="form-group">
							<label>Email</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" name="mail" value="<?php echo $row['mail'] ?>" class="form-control" placeholder="Email" readonly>
							</div>
						</div>
						
						<div class="form-group">
						  <label>Role</label>
						  <select class="form-control" name="role">
							<option value="1" <?php if($row['type_account'] == 1) echo "selected"; ?>  >Admin</option>
							<option value="0" <?php if($row['type_account'] == 0) echo "selected"; ?>  >Author</option>
						  </select>
						</div>
						
						
						
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
					  <button type="submit" name="edit_account" class="btn btn-primary">Edit account</button>
					  
					</div>
				</div>
			</div>
		</form>
	</div>
  <!-- ./row -->
</section>


<?php
		}
		else
			include 'views/blocks/404.php';
}
		else
			include 'views/blocks/404.php';
?>
<script>
  window.onload = function(){
   var files = document.querySelectorAll("input[type=file]");
   files[0].addEventListener("change", function(e) {
    if(this.files && this.files[0]) {
     var reader = new FileReader();
     reader.onload = function(e) { 
      document.getElementById("preview").setAttribute("src", e.target.result); 
     }
      reader.readAsDataURL(this.files[0]);
    }
      });
  }
  
 </script>


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

#preview{
    width: 50%;
}	 
</style>