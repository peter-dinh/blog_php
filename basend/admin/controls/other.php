<?php 
	class Other
	{
		function stripUnicode($str){
		  if(!$str) return false;
		   $unicode = array(
			 'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
			 'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			 'd'=>'đ',
			 'D'=>'Đ',
			  'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			  'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			  'i'=>'í|ì|ỉ|ĩ|ị',	  
			  'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
			 'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			 'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			  'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			 'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			 'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
		   );
		foreach($unicode as $khongdau=>$codau) {
			$arr=explode("|",$codau);
			$str = str_replace($arr,$khongdau,$str);
		}
		return $str;
	}
		
	function changeTitle($str){
		$str=trim($str);
		if ($str=="") return "";
		$str =str_replace('"','',$str);
		$str =str_replace("'",'',$str);
		$str = $this->stripUnicode($str);
		$str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');

		// MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
		$str = str_replace(' ','-',$str);
		return $str;
	}


	function mail_utf8($to, $from_user, $from_email, $subject = '(No subject)', $message = '')
	{
		$from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
		$subject = "=?UTF-8?B?".base64_encode($subject)."?=";
		$headers = "From: $from_user <$from_email>\r\n".
				   "MIME-Version: 1.0" . "\r\n" .
				   "Content-type: text/html; charset=UTF-8" . "\r\n";
		return mail($to, $subject, $message, $headers);
	}

	function RandomKey(){
		$s = "";

		$m = array(0,1,2,3,4,5,6,7,8,9,"a", "b", "c", "d", "e", "f", "g","h","i", "j");

		for($i=1; $i<=32; $i++){
			$r = rand(0, count($m)-1);
			$s = $s . $m[$r];
		}

		return $s;
	}
		
		function RandomImage(){
		$s = "";

		$m = array(0,1,2,3,4,5,6,7,8,9,"a", "b", "c", "d", "e", "f", "g","h","i", "j");

		for($i=1; $i<=5; $i++){
			$r = rand(0, count($m)-1);
			$s = $s . $m[$r];
		}

		return $s."-";
	}
		
		function Upload_File()
		{
			
			// -------    init -----
			$dir = 'upload/image/';
			$file = $dir.basename($_FILES['file']['name']);
			$up_load_ok = 1;
			$image_file_type = pathinfo($file,PATHINFO_EXTENSION); // check .png,...
			$tmp_name = $_FILES['file']['tmp_name'];
			//-------  end   ----
			
			
			//----- Start Check   ------
			
			
			if (file_exists($file)) {
				$file = $dir.$this->RandomImage().$_FILES['file']['name'];
			}
			
			
			// Check file size
			if ($_FILES["file"]["size"] > 500000) {
				echo "<div class=\"alert alert-danger\"><strong>Danger!</strong> Sorry, your file is too large.</div>";
				$up_load_ok = 0;
			}
			
			if($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg"&& $image_file_type != "gif" ) {
				echo "<div class=\"alert alert-danger\"><strong>Danger!</strong> Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
				$up_load_ok = 0;
			}
			
			//------     End    --------
			
			
			// Check if $up_load_ok is set to 0 by an error
			if ($up_load_ok == 1) {
					move_uploaded_file($_FILES["file"]["tmp_name"], $file);
					echo "<div class=\"alert alert-success\"><strong>Success!</strong> The file ". basename( $_FILES["file"]["name"]). " has been uploaded.</div>";
					return $file;
				}
			return null;

			}
		}

?>