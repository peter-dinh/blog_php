<?php 
	session_start();
	if(!isset($_SESSION["username"]) && isset($_SESSION["type_account"]) != 1)
		header("location: views/login.php");
?>


<?php
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  

  
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
  <?php 
    include 'views/header.php';
    include 'views/menu.php';
    include 'views/content.php';
    include 'views/footer.php';
  ?>


    <div class="control-sidebar-bg"></div>
  </div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<!-- Sparkline -->

<!-- jvectormap -->


<!-- jQuery Knob Chart -->

<!-- daterangepicker -->


<!-- Slimscroll -->
<!-- FastClick -->
<!-- AdminLTE App -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->


<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->

<!-- FastClick -->

<!-- AdminLTE App su dung cho menu chinh xo xuong -->
<script src="dist/js/app.min.js"></script> 
<!-- AdminLTE for demo purposes -->

<!-- bootstrap datepicker -->

<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- CK Editor -->
<script src="plugins/ckeditor/ckeditor.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="plugins/ckeditor/adapters/jquery.js"></script>
<script src="plugins/ckfinder/ckfinder.js"></script>

<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>

  $(function () {
    $("#example2").DataTable();
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
	"order": [[ 3, "desc" ]]
    });
  });
  
</script>

<script>


  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
    filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    
});
    //bootstrap WYSIHTML5 - text editor
    //$(".textarea").wysihtml5();
	 CKEDITOR.editorConfig = function( config )
{
  config.language = 'es';
	config.uiColor = '#F7B42C';
	config.toolbarCanCollapse = true;
  config.extraPlugins = 'iframe';
  config.extraPlugins = 'image';
  config.extraPlugins = 'flash';
};

  });





	
	$('#datepicker1').datepicker({
    autoclose: false,
	todayHighlight: true,
	defaultViewDate: 'today',
	format: 'yyyy-mm-dd'
    });
    
    
</script>

<script>
$(document).ready( 
	function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
	
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>

<script>
    $("#compose-textarea").wysihtml5();
</script>
</body>
</html>