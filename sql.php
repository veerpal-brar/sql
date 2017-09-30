<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "Connected successfully";
}

/*$sql = "CREATE DATABASE vb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
	
} else {
    echo "Error creating database: " . $conn->error;
}*/

$sql = "USE vb";
if ($conn->query($sql) === TRUE) {
   // echo "Database created successfully";

  // $sql = "CREATE TABLE student (studId int(4) PRIMARY KEY, studName varchar(40), gender varchar(6), age int(2))";
   
   
/*$sql = "CREATE TABLE student ("
	."studId int(4)  PRIMARY KEY,"
	."studName varchar(40),"
	."gender varchar(6),"
	."age int(2));";
	
	
	echo $sql;
	
	if($conn->query($sql)===TRUE){
		echo "Table created successfully . <br>";
	}
	else{
		echo "Error creating table: " . $conn->error;
	}
	
	
	
	*/
	
	
	
	$sql = "INSERT INTO student(studName,gender,age)VALUES('veerpal,female,12);";
	$sql.= "INSERT INTO student(studName,gender,age)VALUES('veerpal,female,12);";

	
	
	if ($conn->multi_query($sql)===TRUE){
	echo "New records created successfully";
	}
	else{
		echo "error inserting record: " .$conn->error;
	}
	
	



	

$conn->close();
?>
