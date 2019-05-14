<?php
	include("../ajax/db_connection.php");
	$type 			= $_POST['type'];
	$name 			= $_POST['name'];
	$description 	= $_POST['description'];
	$param 	        = $_POST['param'];
	$val_x 			= $_POST['val_x'];
	$val_y 			= $_POST['val_y'];
	$val_w 			= $_POST['val_w'];
	$val_h 			= $_POST['val_h'];
	$action 		= $_POST['action'];
	$datas 			= $_POST['datas'];
	$query = "INSERT INTO tb_xml(type,name,description,param,val_x,val_y,val_w,val_h,action,datas) VALUES('$type', '$name', '$description','$param', '$val_x', '$val_y', '$val_w', '$val_h', '$action', '$datas')";

	$result = mysqli_query($mysqli,$query);
	if (!$result) {
		echo "false";
	}else{
		echo  mysqli_insert_id($mysqli);
	}
?>