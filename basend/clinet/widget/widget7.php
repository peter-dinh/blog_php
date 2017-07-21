<?php 
	require_once('controls/category_control.php');
	$category = new Category_Control_Clinet();
	$list_category = $category->List_Category();
?>
<aside class="list music aside section">
    <div class="section-inner">
        <h2 class="heading">Category</h2>
        <div class="content">
            <ul class="list-unstyled">
               <?php
					while($row =  $list_category->fetch_array())
					{
						ob_start();
				?>
                <li><i class="fa fa-tags"></i> <a href="index.php?category={category}">{name}</a></li>
				<?php
						$s = ob_get_clean();
						$s = str_replace("{name}", $row["name"], $s);
						$s = str_replace("{category}", $row["unsigned_name"], $s);
						echo $s;
					}
				?>
            </ul>
        </div><!--//content-->
    </div><!--//section-inner-->
</aside><!--//section-->