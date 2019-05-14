<?php 
include("../ajax/db_connection.php");

$term = trim(strip_tags($_GET['term']));
$get    = "SELECT name FROM tb_component WHERE name LIKE '%".$term."%'";
$result = mysqli_query($mysqli,$get);
if (!$result) {
	echo mysqli_error($mysqli);
}else{
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$item [] = $row['name'];
		}
		echo json_encode($item);
	}
}

?>