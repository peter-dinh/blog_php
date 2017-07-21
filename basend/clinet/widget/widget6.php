
<?php 
    require_once('controls/widget_control.php');
    $widget = new Widget_Control_Clinet();

    $list_admin = $widget->List_Admin();
    while($row = $list_admin -> fetch_array())
    {
?>
<aside class="blog aside section">
    <div class="section-inner">
        <h2 class="heading">Introduce  Admin</h2>
        <div id="rss-feeds" class="content">
		<img class="profile-image img-responsive pull-center center-block" src="admin/<?php echo $row["avatar"] ?>" alt="<?php echo $row["name"] ?>" />
        <div class="profile-content pull-center">
            <h1 class="name text-center"><?php echo $row["name"] ?></h1>
            <h4 class="desc text-center">Developer Blog</h4>   
            <ul class="social list-inline center">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>                   
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-github-alt"></i></a></li>                  
                <li class="last-item"><a href="#"><i class="fa fa-hacker-news"></i></a></li>                 
            </ul> 
        </div><!--//profile-->
        </div><!--//content-->
    </div><!--//section-inner-->
</aside><!--//section-->

<?php 
    }
?>