<?php
   $servername = "localhost";
   $username="root";
   $password ="";
   $dbname = "jee_mains";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Name,f_name,gender,Roll,DOB,Category FROM result";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>f_name</th><th>gender</th><th>Roll</th><th>DOB</th><th>Category</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["Name"]."</td><td>".$row["f_name"]."</td><td>".$row["gender"]."</td><td>".$row["Roll"]."</td><td>".$row["DOB"]."</td><td>".$row["Category"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
