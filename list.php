<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learnfrenchdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  " Name: " .$row["id"] " ". $row["firstname"]. " " . $row["lastname"]. "<br>";
        ?>
        <button id ="sil"><a href='delete.php?id=<?php $row["id"]?>'>delete</a></button>
   <?php } ?>
     
    
    <?php 
} else {
    echo "0 results";
}

mysqli_close($conn);
?>