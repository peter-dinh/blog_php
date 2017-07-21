<?php 
	if(isset($_POST['logout']))
	{
		unset($_SESSION["id_user"]);
		unset($_SESSION["email"]);
		unset($_SESSION["name"]);
		unset($_SESSION["type_account"]);
		header("location: views/login.php");
	}
?>

<?php 
	require_once('controls/account_control.php');
	$account = new Account_Control();
	$info = $account->Info_Account($_SESSION["id_user"]);
?>

 <header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>LTE</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        
        <!-- Notifications: style can be found in dropdown.less -->
        
        <!-- Tasks: style can be found in dropdown.less -->
        
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo $info['avatar'] ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $info['name'] ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="<?php echo $info['avatar'] ?>" class="img-circle" alt="User Image">

              <p>
                <?php echo $info['name'] ?> - <?php if($info['type_account'] == 1 ) echo "Admin"; else echo "Author"; ?>
                <small>Birthday: <?php  echo date("F j, Y", strtotime($info["date"]));?></small>
              </p>
            </li>
            <!-- Menu Body -->
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="index.php?menu=profile" class="btn btn-default btn-flat">Profile</a>
              </div>
              <form method="post" >
              <div class="pull-right">
                <button type="submit" name="logout" class="btn btn-default btn-flat">Sign out</button>
              </div>
              </form>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->

      </ul>
    </div>
  </nav>
</header>