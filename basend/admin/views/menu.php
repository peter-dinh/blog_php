<?php 
	require_once('controls/account_control.php');
	require_once('controls/comment_control.php');
	$comment = new Comment_Control();
	$account = new Account_Control();
	$info = $account->Info_Account($_SESSION["id_user"]);
?>
 

 <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo $info['avatar'] ?>" class="img-circle" style="height: 45px;" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $info['name'] ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li><a href="index.php?menu=home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Post</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?menu=post&post=all"><i class="fa fa-circle-o"></i> All Post</a></li>
          <li><a href="index.php?menu=post&post=new"><i class="fa fa-circle-o"></i> New Post</a></li>
          <li><a href="index.php?menu=post&post=category"><i class="fa fa-circle-o"></i> Category</a></li>
          <li><a href="index.php?menu=post&post=draft"><i class="fa fa-circle-o"></i> Draft</a></li>
        </ul>
      </li>
      <li><a href="index.php?menu=comment"><i class="fa fa-bullhorn"></i> <span>Comment</span><?php if($comment->Count_Comment_New() > 0){ $x = $comment->Count_Comment_New(); echo "<span class=\"label label-primary pull-right\">$x news</span>";} ?></a></li>
      <li class="treeview">
        <a href="#">
          <i class="ion ion-person-add"></i> <span>Account</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?menu=account&account=all"><i class="fa fa-circle-o"></i> List Account</a></li>
          <li><a href="index.php?menu=account&account=new"><i class="fa fa-circle-o"></i> New Account</a></li>
          <li><a href="index.php?menu=account&account=pass"><i class="fa fa-circle-o"></i> Change Pass</a></li>
        </ul>
      </li>
      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-envelope"></i>
          <span>Mail</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?menu=mail&mail=inbox"><i class="fa fa-circle-o"></i> Inbox</a></li>
          <li><a href="index.php?menu=mail&mail=compose"><i class="fa fa-circle-o"></i> Compose</a></li>
          <li><a href="index.php?menu=mail&mail=read"><i class="fa fa-circle-o"></i> Read</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-wrench"></i>
          <span>Setup</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="index.php?menu=setup&setup=basic"><i class="fa fa-circle-o"></i> Basic</a></li>
          <li><a href="index.php?menu=setup&setup=post"><i class="fa fa-circle-o"></i> Post</a></li>
          <li><a href="index.php?menu=setup&setup=page"><i class="fa fa-circle-o"></i> Page</a></li>
          <li><a href="index.php?menu=setup&setup=account"><i class="fa fa-circle-o"></i> Account</a></li>
          <li><a href="index.php?menu=setup&setup=mail"><i class="fa fa-circle-o"></i> Mail</a></li>
        </ul>
      </li>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>