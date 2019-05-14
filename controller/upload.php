<?php 
if ($_POST['name'] != '') {
	$file_name = $_POST['name'].'.png';
}else{
	$file_name = 'Crop_'.date('Y_m_d_H_i_s').'.png'; 
}

$file_to_upload= $_FILES['croppedImage']['tmp_name'];


move_uploaded_file($_FILES['croppedImage']['tmp_name'], 'c:/xampp/htdocs/crop/uploads/'.$file_name);
echo $file_name;

?>