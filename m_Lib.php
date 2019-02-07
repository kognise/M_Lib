<?php
//BEGIN FILE UPLOAD 

//Error detection and keys
$phpFileUploadsError = array(
	0 => 'there are no errors',
	1 => 'the uploaded file exceeded the max file size (ini)',
	2 => 'the uploaded file exceeds the max file size (dir)' ,
	3 => 'The upload file was only partially uploaded',
	4 => 'No file was uploaded',
	6 => 'Missing a temp folder',
	7 => 'Failed to write disk',
	8 => 'A php function stopped the upload'

);
//displaying file upload array info
function reArrayFiles( $file_post ){

	$file_ary = array();
	$file_count = count($file_post['name']);
	$file_keys = array_keys($file_post);

	for($i = 0; $i< $file_count; $i++){
		foreach($file_keys as $key){
			$file_ary[$i][$key] = $file_post[$key][$i];
		}
	}
	return $file_ary;
	}

//printing file upload array
function pre_r( $array ){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}

function multipleUpload($fle, $folder){
	$phpFileUploadsError = array(
	0 => 'there are no errors',
	1 => 'the uploaded file exceeded the max file size (ini)',
	2 => 'the uploaded file exceeds the max file size (dir)' ,
	3 => 'The upload file was only partially uploaded',
	4 => 'No file was uploaded',
	6 => 'Missing a temp folder',
	7 => 'Failed to write disk',
	8 => 'A php function stopped the upload'

);
	$fold = $folder;
	$file_array = reArrayFiles($_FILES[$fle]);
	//pre_r($file_array);
	for ($i=0; $i <count($file_array) ; $i++) { 
		if($file_array[$i]['error']){
			echo $file_array[$i]['name']. '   -   ' .$phpFileUploadsError[$file_array[$i]['error']];
		}
		else{
			$img_extensions = array('jpg', 'png', 'jpeg', 'JPG');
			$file_ext = explode('.', $file_array[$i]['name']);
			$file_ext = end($file_ext);
			if(in_array($file_ext, $img_extensions)){
				$img = $file_array[$i]['name'];
				move_uploaded_file($file_array[$i]['tmp_name'], $fold.$file_array[$i]['name']);
			}
			
	}
}
}
function multipleUploadWithTwoSort($fle, $folderOne, $folderTwo, $param1, $param2, $param3, $param4, $param5, $param6, $param7, $param8, $param9, $param10, $param11, $param12){
	$phpFileUploadsError = array(
	0 => 'there are no errors',
	1 => 'the uploaded file exceeded the max file size (ini)',
	2 => 'the uploaded file exceeds the max file size (dir)' ,
	3 => 'The upload file was only partially uploaded',
	4 => 'No file was uploaded',
	6 => 'Missing a temp folder',
	7 => 'Failed to write disk',
	8 => 'A php function stopped the upload'

);
	$fold = $folderOne;
	$folde = $folderTwo;
	$file_array = reArrayFiles($_FILES[$fle]);
	//pre_r($file_array);
	for ($i=0; $i <count($file_array) ; $i++) { 
		if($file_array[$i]['error']){
			echo $file_array[$i]['name']. '   -   ' .$phpFileUploadsError[$file_array[$i]['error']];
		}
		else{
			$extensionsOne = array($param1, $param2, $param3, $param4, $param5, $param6);
			$extensionsTwo = array($param7, $param8, $param9, $param10, $param11, $param12);
			$file_ext = explode('.', $file_array[$i]['name']);
			$file_ext = end($file_ext);
			if(in_array($file_ext, $extensionsOne)){
				$img = $file_array[$i]['name'];
				move_uploaded_file($file_array[$i]['tmp_name'], $fold.$file_array[$i]['name']);
			}
			if(in_array($file_ext, $extensionsTwo)){
				$img = $file_array[$i]['name'];
				move_uploaded_file($file_array[$i]['tmp_name'], $folde.$file_array[$i]['name']);
			}
			
	}
}
}