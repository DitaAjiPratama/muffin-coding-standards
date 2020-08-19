<?php
  include "db.php";

  $data = json_decode(file_get_contents("php://input"));

  $request = $data->request;

  if ($request == "read") {

    $query = mysqli_query($con, "SELECT * FROM users ORDER BY id DESC");

  	$response = array();
  	while ($row = mysqli_fetch_assoc($query)) $response[] = $row;

  	echo json_encode($response);
  	exit;

  }

  if($request == "create"){
  	$username = $data->username;
  	$name = $data->name;
  	$email = $data->email;

  	$userData = mysqli_query($con,"SELECT * FROM users WHERE username='".$username."'");
  	if(mysqli_num_rows($userData) == 0){
  		mysqli_query($con,"INSERT INTO users(username,name,email) VALUES('".$username."','".$name."','".$email."')");
  		echo "Add record";
  	}
    else echo "Username already exists.";

    exit;

  }

  if($request == "update"){
  	$id = $data->id;
  	$name = $data->name;
  	$email = $data->email;

  	mysqli_query($con,"UPDATE users SET name='".$name."',email='".$email."' WHERE id=".$id);

  	echo "Update record";
  	exit;
  }

  if($request == "delete"){
  	$id = $data->id;

  	mysqli_query($con,"DELETE FROM users WHERE id=".$id);

  	echo "Delete successfully";
  	exit;
  }

?>
