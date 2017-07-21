
<?php 
	require_once('controls/comment_control.php');
	require_once('controls/category_control.php');
	require_once('controls/post_control.php');
	$category = new Category_Control_Clinet();
	$comment = new Comment_Control_Clinet();
	$post = new Post_Control_Clinet();
	if(isset($_GET['category']))
	{
		$id_category = $category->Get_ID_Category($_GET['category']);
		if($id_category != null)
		{
			if(isset($_GET['id']))
			{
				$count = $comment->Count_Comment($_GET['id']);
				$list_comment = $comment->List_Comment($_GET['id']);
			}
		}
	}
?>   

<?php 
	if(isset($_POST['add_comment']))
	{
		$max_id = $comment->Get_ID_Max_Comment();
		$comment->Add_Comment($max_id);
		header("Refresh:0");
	}
?>

<section class="github section">
    <div id="comments">
    <?php 
		if(isset($_GET['category']))
		{
			$id_category = $category->Get_ID_Category($_GET['category']);
			if($id_category != null)
			{
				if(isset($_GET['id']))
				  {
					  $id_category2 = $post->Get_ID_Category2($_GET['id']);
					  if($id_category2 != null)
						{
		?>
  <h2>Comments</h2>
  <ul>
   <?php 
							if($count != 0)
							{
								while($row = $list_comment->fetch_array())
								{
									ob_start();
	  ?>
   
    <li>
      <article>
        <header>
          <figure class="avatar"><img src="images/demo/avatar.png" alt=""></figure>
          <address>
          By <a href="">{Name}</a>
          </address>
          <time><?php echo date_format(date_create($row['date']), 'g:ia \o\n jS F Y'); ?></time>
        </header>
        <div class="comcont">
          <p>{content}</p>
        </div>
      </article>
    </li>
    
    <?php 
								$s = ob_get_clean();
								$s = str_replace("{Name}", $row['name'], $s);
								$s = str_replace("{content}", $row['content'], $s);
								echo $s;
							}
						}
		  				else
		  				{
	  ?>
			<li>
			  <article>
				<div class="comcont">
				  <p class="text-center">You are first comment for comment this post</p>
				</div>
			  </article>
			</li>  
	<?php
						}
	  ?>
  </ul>
  

  <h2>Write A Comment</h2>
  <form method="post">
    <div class="one_third first">
      <label for="name">Name <span>*</span></label>
      <input type="text" name="name" id="name" value="" size="22" required>
    </div>
    <div class="one_third">
      <label for="email">Mail <span>*</span></label>
      <input type="email" name="email" id="email" value="" size="22" required>
    </div>
    <div class="one_third">
      <label for="url">Website</label>
      <input type="url" name="website" id="url" value="" size="22">
    </div>
    <div class="block clear">
      <label for="comment">Your Comment</label>
      <textarea name="content" id="comment" cols="25" rows="10"></textarea>
    </div>
    <div>
      <input type="submit" name="add_comment" value="Submit Form">
      &nbsp;
      <input type="reset" name="reset" value="Reset Form">
    </div>
  </form>
  <?php
					}
				}
			}
			else echo "not categry";
		}
?>
</div>
</section><!--//section-->
