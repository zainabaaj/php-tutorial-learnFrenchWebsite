<?php
include 'connection.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, username, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    if($row["username"]==$_POST['uname'] && $row["password"]==$_POST['psw'])
    
        include 'structure.php';
    
    
}
}
    
 else {
    echo "0 results";
}
$conn->close();
?>