<?php
//database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ems_db";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname); 

//check connection 
if($conn->connect_error) 
{
    die("Connection failed : ".$conn->connect_error);
}

$sql_create_table = "CREATE TABLE IF NOT EXISTS user(id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL)";
if($conn->query($sql_create_table) === FALSE) 
{
    echo "Error creating table: ".$conn->error;
}

//insert value
$name = "Sarath";
$email = "Sarath@gmail.com";
$sql_insert = "INSERT INTO user (name , email) VALUES ('$name','$email')";
if($conn->query($sql_insert) === TRUE) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
}

//READ RECORDS
$sql_select = "SELECT id,name,email FROM user";
$result = $conn->query($sql_select);
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Id : ".$row["id"]." Name : ".$row["name"]." Email : ".$row["email"]."<br>";
    }
} else {
    echo "0 results";
}

// Update record (Update operation)
$newName = "Sarath";
$idToUpdate = 1;
$sql_update = "UPDATE user SET name='$newName' WHERE id=$idToUpdate";

if ($conn->query($sql_update) === TRUE) {
    echo "Record updated successfully.<br>";
} else {
    echo "Error updating record: " . $conn->error;
}
// Delete record (Delete operation)
$idToDelete = 1;
$sql_delete = "DELETE FROM user WHERE id=$idToDelete";

if ($conn->query($sql_delete) === TRUE) {
    echo "Record deleted successfully.<br>";
} else {
    echo "Error deleting record: " . $conn->error;
}
// Close connection
$conn->close();
?>
