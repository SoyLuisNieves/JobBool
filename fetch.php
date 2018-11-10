<?php 
$connect = mysqli_connect("localhost", "root", "", "jobbool2");
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "
	SELECT * FROM puestos where puesto LIKE '%".$request."%'
";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$data[] = $row["puesto"];
	}
	echo json_encode($data);
}

 ?>