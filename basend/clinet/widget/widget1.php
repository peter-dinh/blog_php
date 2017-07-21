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

<aside class="info aside section">
    <div class="section-inner">
        <h2 class="heading sr-only">Basic Information</h2>
        <div class="content">
            <ul class="list-unstyled">
                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span><?php echo $info_user['address']; ?></li>
                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="mailto:<?php echo $info_user['mail']; ?>"><?php echo $info_user['mail']; ?></a></li>
                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="#">http://www.website.com</a></li>
            </ul>
        </div><!--//content-->  
    </div><!--//section-inner-->                 
</aside><!--//aside-->