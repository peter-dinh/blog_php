<?php 
	ob_start();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive HTML5 Website Template for Developers | 3rd Wave Media</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website landing Page for Developers">
    <meta name="author" content="3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <!-- github acitivity css -->
    <link rel="stylesheet" href="assets/plugins/github-activity/dist/github-activity-0.1.1.min.css">
    <link rel="stylesheet" href="assets/plugins/github-activity/dist/octicons/octicons.min.css">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="layout/styles/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body>
    <?php 
        if(isset($_GET['id']))
            include 'clinet/header_post.php';
        else
            include 'clinet/header.php';
    ?>
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">

                <?php 
                if(isset($_GET['category']))
                {
                    if(isset($_GET['id']))
                        include 'clinet/post.php';
                    else
                        include 'clinet/category.php';
                }
                else
                    include 'clinet/home.php';
                ?>

            </div>

            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                <?php 
                    if(isset($_GET['id']))
                        include 'clinet/widget_post.php';
                    else
                        include 'clinet/widget_home.php';
                ?>
            </div>
        </div>
    </div>

    <?php 
        include 'clinet/footer.php';
    ?>




<!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script> 
    <!-- github activity plugin -->
    <script type="text/javascript" src="assets/plugins/github-activity/dist/mustache/mustache.min.js"></script>
    <script type="text/javascript" src="assets/plugins/github-activity/dist/github-activity-0.1.1.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script> 
         
</body>
</html> 