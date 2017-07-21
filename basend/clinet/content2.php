<?php 
	require_once('controls/post_control.php');
	require_once('controls/category_control.php');
	$category = new Category_Control_Clinet();
	$post = new Post_Control_Clinet();
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
					$post_info = $post->Info_Post($_GET['id']);
					$row = $post_info->fetch_array();

					$datetime1 = strtotime($row['date']);
					$datetime2 = strtotime(date("Y-m-d"));

					$secs = $datetime2 - $datetime1;// == <seconds between the two times>
					$days = $secs / 86400;
?>
   

<section class="latest section">
    <div class="section-inner">
        <div class="item featured text-center">
            <h2 class="heading"><a href="#" target="_blank"><?php echo $row['title']; ?></a></h3>
            <p class="summary"><?php echo $row['excerpt']; ?></p>
            <div class="featured-image">
                <a href="#" target="_blank">
                <img class="img-responsive img-thumbnail project-image border" style="width: 100%"  src="admin/<?php echo $row['url_image']; ?>" alt="project name" />
                </a>
                <?php if($days <= 7) { ?>
                <div class="ribbon">
                    <div class="text">New</div>
               	</div>
               	<?php } ?>
            </div>
                
            <div class="desc text-left">                                    
                <!-- content -->
				<?php echo $row['content']; ?>
            </div><!--//desc-->             
        </div><!--//item-->
    </div>
</section>


<?php 
				}
				else
					include '404.php';
			}
		}
		else
			include'404.php';
	}
?>