<?php 
	require_once('controls/post_control.php');
	$post = new Post_Control_Clinet();
	$list_popular = $post->List_Post_Popular();
?>
   

<section class="projects section">
    <div class="section-inner">
        <h2 class="heading"><span style="color: #FFA500;">Post Popular</span></h2>
        <div class="content">
           <?php 
				while ($row = $list_popular->fetch_array())
				{
					$unsigned_name = $post->Get_Unsigned_Title($row['id_type']);
					$datetime1 = strtotime($row['date']);
					$datetime2 = strtotime(date("Y-m-d"));

					$secs = $datetime2 - $datetime1;// == <seconds between the two times>
					$days = $secs / 86400;
					ob_start();
			?>
            <div class="item">
                <h3 class="title"><a href="index.php?category={unsigned_name}&id={id_post}">{title} </a> <?php if($days <= 7) echo "<span class=\"label label-theme\">New</span>"; ?></h3>
                <p class="summary">{excerpt}</p>
                <p><a class="more-link" href="index.php?category={unsigned_name}&id={id_post}" target="_blank"><i class="fa fa-external-link"></i>More Info</a></p>
            </div><!--//item-->
            
            <?php
					$s = ob_get_clean();
					$s = str_replace("{id_post}", $row["id_post"],$s);
					$s = str_replace("{title}", $row["title"], $s);
					$s = str_replace("{excerpt}", $row["excerpt"], $s);
					$s = str_replace("{unsigned_name}",$unsigned_name,$s);
					echo $s;
				}
			?>
            
        </div><!--//content-->  
    </div><!--//section-inner-->                 
</section><!--//section-->