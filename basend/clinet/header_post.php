<?php 
    require_once('controls/widget_control.php');
    require_once('controls/post_control.php');
    
    $post = new Post_Control_Clinet();
    $widget = new Widget_Control_Clinet();// exsit function get info user
    
    if(isset($_GET['id']))// no try catch category
    {
        $info_post =  $post->Info_Post($_GET['id']);
        $row = $info_post->fetch_array();
        $id_user = $row['id_user'];
        $info_user = $widget->Info_Author($id_user);// return array in function
    }
?>

<header class="header">
    <div class="container">                       
        <img class="profile-image img-responsive pull-left img-circle " style="width:180px; height:180px;" src="admin/<?php echo $info_user['avatar']; ?>" alt="<?php echo $info_user['name']; ?>" />
        <div class="profile-content pull-left">
            <h1 class="name"><?php echo $info_user['name']; ?></h1>
            <h2 class="desc"><?php if($info_user['type_account'] == 1) echo "Admin Blog"; else echo "Author Blog";  ?></h2>   
            <ul class="social list-inline">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>                   
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-github-alt"></i></a></li>                  
                <li class="last-item"><a href="#"><i class="fa fa-hacker-news"></i></a></li>                 
            </ul> 
        </div><!--//profile-->
        <a class="btn btn-cta-primary pull-right" href="#" target="_blank"><i class="fa fa-paper-plane"></i> Contact Me</a>              
    </div><!--//container-->
</header><!--//header-->