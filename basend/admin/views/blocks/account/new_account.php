<?php 
	require_once('controls/account_control.php');
	$account = new Account_Control();
?>
<?php 
	if(isset($_POST['add_account']))
	{
		$max_id = $account->Info_Max_ID();
		$account->ACCOUNT_ADD( $max_id);
	}
?>

<!-- Main content -->
<section class="content">
	<div class="row">
		<form role="form" method="post" action="views/blocks/account/test.php" enctype="multipart/form-data">
			<div class="col-md-12">
				<div class="box box-warning">
					<div class="box-header with-border">
					  <h3 class="box-title">New Account</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
					
						<!-- text input -->
						<div class="form-group">
						  <label for="pass">UserName</label>
						  <input type="text" name="user" class="form-control" placeholder="Username ...">
						</div>
						
						<!-- textarea -->
						<div class="form-group">
						  <label for="pass">Password</label>
						  <input type="text" name="pass" class="form-control" placeholder="Password ...">
						</div>
						
						<div class="form-group">
						  <label for="name">Name</label>
						  <input type="text" name="name" class="form-control" placeholder="Name ...">
						</div>
						
						<div class="form-group">
						  <label for="name">Sex</label>
						  <select class="form-control" name="sex">
							<option value="1"  >Male</option>
							<option value="0"  >Female</option>
						  </select>
						</div>
						
						<div class="form-group">
							<label>Birthday</label>
							<div class="input-group date">
							  <div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							  </div>
							  <input type="text" name="date" class="form-control pull-right" id="datepicker1">
							</div>
						</div>
						
						<div class="form-group">
							<form method="post">
								<label>Upload Image</label>
								<div class="input-group">
									<span class="input-group-btn">
										<span class="btn btn-default btn-file">
											Browse… <input type="file" name="file" >
										</span>
									</span>
								</div>
								<img id='preview'/>
							</form>
						</div>
						
						<div class="form-group">
						  <label for="name">Address</label>
						  <input type="text" name="address" class="form-control" placeholder="Address ...">
						</div>
						
						<div class="form-group">
						  <label for="name">Phone</label>
						  <input type="text" name="phone" class="form-control" placeholder="Phone ...">
						</div>
						
						<div class="form-group">
							<label>Email</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" name="mail" class="form-control" placeholder="Email">
							</div>
						</div>
						
						<div class="form-group">
						  <label>Role</label>
						  <select class="form-control" name="role">
							<option value="0"  >Author</option>
							<option value="1"  >Admin</option>
						  </select>
						</div>
						
						<!-- select -->
						<div class="form-group">
						  <label>Active</label>
						  <select class="form-control" name="active">
							<option value="1"  >Send mail active</option>
							<option value="0"  >Active now</option>
						  </select>
						</div>
						
						
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
					  <button type="submit" name="add_account" class="btn btn-primary">New account</button>
					  
					</div>
				</div>
			</div>
		</form>
	</div>
  <!-- ./row -->
</section>

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