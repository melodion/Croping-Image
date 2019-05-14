<?php 	
include("../ajax/db_connection.php");
if(isset($_POST['param']))
{
	$query   = "TRUNCATE TABLE tb_xml";
	$result = mysqli_query($mysqli,$query);
	if (!$result) {
		echo "false";
	}else{
		echo "true";
	}
}
?>
