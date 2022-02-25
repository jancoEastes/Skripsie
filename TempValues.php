<?php
//connect to Database

$conn = mysqli_connect("localhost", "root", "", "temperature");
if(!$conn){
	echo mysqli_error($conn). "<br.>";
	exit;
}

$mysqli = "SELECT Temperature FROM Sheet1";
$result = mysqli_query($conn, $mysqli);
$tempValues = array();

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		$tempValues[] = array_values($row);
	}
}else{
	echo ") results";
}

/*foreach ($tempValues as $tempVal){
	$ValsOnly = array_values($tempVal);
	
}
*/
$conn->close();
?>