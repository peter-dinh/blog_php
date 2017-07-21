<?php 

	require_once('controls/list_post_category.php');
	if(isset($_GET['category']))
	{
		$list_post_category = new List_Post_Category();
		$list = $list_post_category->List_Post();
		$name = $list_post_category->Get_Name_Category($_GET['category']);
	}
	else
	{
		$list_post_category = new List_Post_Category();
		$list = $list_post_category->List_Post_New();
	}
	
?>
<section class="latest section">
    <div class="section-inner">
        <h2 class="heading"><?php if(!isset($_GET['category'])) echo "<span style=\"color:blue;\">New Post</span>"; else echo "Catagory: <b>".$name."</b>"; ?></h2>
        <div class="content">    
           
           <?php 
				if($list != false)
				{
					while($row = $list->fetch_array())
					{
						$id_category = $list_post_category->Get_ID_Category2($row['id_post']);
						
						$unsigned_name = $list_post_category->Get_Unsigned_Title($id_category);
						
						ob_start();
			?>
            <div class="item row">
                <a class="col-md-4 col-sm-4 col-xs-12" href="index.php?category={unsigned_name}&id={id_post}" >
                <img class="img-responsive project-image" src="admin/{url_img}" alt="project name" />
                </a>
                
                <div class="desc col-md-8 col-sm-8 col-xs-12">
                    <h3 class="title"><a href="index.php?category={unsigned_name}&id={id_post}" >{title}</a></h3>
                    <p>{excerpt}</p>
                    <p><a class="more-link" href="index.php?category={unsigned_name}&id={id_post}" ><i class="fa fa-external-link"></i> More Info</a></p>
                </div><!--//desc-->                          
            </div><!--//item-->
            
            <?php
						$s = ob_get_clean();
						$s = str_replace("{id_post}", $row["id_post"],$s);
						$s = str_replace("{title}", $row['title'], $s);
						$s = str_replace("{url_img}", $row['url_image'], $s);
						$s = str_replace("{excerpt}", $row['excerpt'], $s);
						$s = str_replace("{unsigned_name}",$unsigned_name,$s);
						echo $s;
					}
				}
				else
				{
			?>
           		<div class="item row">
           			Page 404 error: Your request is not accepted!
				</div>
            <?php 
				}
			?>
            <?php 
                if(isset($_GET['category']))
                    include 'pagination.php';
            ?>
        </div><!--//content-->  
    </div><!--//section-inner-->                 
</section><!--//section-->