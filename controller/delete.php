<?php 	
include("../ajax/db_connection.php");
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
	$id      = $_POST['id'];
	$query   = "DELETE FROM tb_xml WHERE id = '$id'";
	$result = mysqli_query($mysqli,$query);
	if (!$result) {
		echo mysqli_error($mysqli);
	}else{
		echo "Success !";
	}
}
?>
?>