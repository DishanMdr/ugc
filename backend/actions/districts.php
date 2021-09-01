<?php
$servername = "localhost";
$database = "ugc_db";
$username = "root";
$password = "";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM district";

$result = $conn->query($sql);

 	// if($result->num_rows > 0){
  //       $row = $result->fetch_assoc();
  //       $arr["id"] = $row["Id"]; //return datetime and value as array
  //       $arr["name"] = $row["name"];
  //       $arr["status"] = "success";
  //   }else{
  //       $arr["status"] = "error";
  //   }

  //   echo json_encode($arr);

// echo $result;
// echo json_encode($result);

if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {
	    $arr["id"] = $row["Id"]; //return datetime and value as array
	    $arr["name"] = $row["name"];
	    $arr["status"] = "success";
	}
} else {
	$arr["status"] = "error";
}

echo json_encode($arr);

mysqli_close($conn);

?>
