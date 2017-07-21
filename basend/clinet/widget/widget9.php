<?php 
    require_once('controls/widget_control.php');
    require_once('controls/post_control.php');
    require_once('controls/category_control.php');
    require_once('controls/comment_control.php');
    
    $comment = new Comment_Control_Clinet();
    
    $category = new Category_Control_Clinet();
    
    $post = new Post_Control_Clinet();
    
    $widget = new Widget_Control_Clinet();

    $total = $widget->Total_Visit();
    $online = $widget->Count_Online();
?>

<aside class="info aside section">
    <div class="section-inner">
        <h2 class="heading sr-only">Website:</h2>
        <div class="content">
            <ul class="list-unstyled">
                <li><i class="fa fa-server"></i><span class="sr-only">Ip:</span><span style="color: blue;">Your IP</span>:   <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
                <li><i class="fa fa-bar-chart"></i><span class="sr-only">Total:</span><span style="color: #FFA500;">Total</span>:   <?php echo $total; ?></li>
                <li><i class="fa fa-user-o"></i><span class="sr-only">Online</span><span style="color: green;"> Online</span>:   <?php echo $online; ?></li>
                <?php 
                    if(isset($_GET['category']))
                	{
                		$id_category = $category->Get_ID_Category($_GET['category']);
                		if($id_category != null)//check exsit category
                		{
                			if(isset($_GET['id']))
                			{
                				$id_category2 = $post->Get_ID_Category2($_GET['id']);
                				if($id_category2 != null && $id_category == $id_category2)// check exsit category of post
                				{
                ?>
                <li><i class="fa fa-eye"></i><span class="sr-only">View</span><span style="color: red;"> View</span>:   <?php echo $post->Count_View($_GET['id']); ?></li>
                <li><i class="fa fa-comment-o"></i><span class="sr-only">Comment</span><span style="color: #1cbfe8;"> Comment</span>:   <?php echo $comment->Count_Comment($_GET['id']) ?></li>
                <?php 
                				}
                			}
                		}
                	}
                ?>
            </ul>
        </div><!--//content-->  
    </div><!--//section-inner-->                 
</aside><!--//aside-->