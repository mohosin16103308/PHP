<?php

// creating an object of mysqli class and passing parameters to it's constructor for database connection

$db = new mysqli("localhost","niha","123456","hellodb");

// mysqli_connect_errno() function returns the error code from last connection call

if(mysqli_connect_errno()){
	echo "Connection failed";
	exit();
} else {
	//echo "Connection successful";
}

// performing SELECT query on database

$sql = "select * from students_info";

$result = $db->query($sql);

while($data = $result->fetch_object()){
	echo "<pre>";
	echo $data->skill;
	echo "</pre>";
}

// performing UPDATE query on database

$new_sql = " update students_info SET skill= 'Hiking' where id='2' ";

$new_result = $db->query($new_sql);

?>
