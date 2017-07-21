<?php 
	require_once('controls/account_control.php');
	$account = new Account_Control();
	$info_account =  $account->Info_Account($_SESSION['id_user']);
	$row = $info_account;
?>
   

   <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
        <form role="form" method="post" enctype="multipart/form-data">
			<div class="col-md-9">
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
      <!-- /.row -->

    </section>
    <!-- /.content -->