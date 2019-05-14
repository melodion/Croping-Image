<?php 
include("../ajax/db_connection.php");

$term = $_POST['name'];
$get    = "SELECT action FROM tb_component WHERE name ='$term'";
$result = mysqli_query($mysqli,$get);
if (!$result) {
	echo mysqli_error($mysqli);
}else{
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		echo $row['action'];
	}
}

?>