<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch job data from the 'job' table
$sql = "SELECT * FROM job";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data as JSON
    $output = array();
    while ($row = $result->fetch_assoc()) {
        $output[] = $row;
    }
    echo json_encode($output);
} else {
    echo "0 results";
}

$conn->close();
?>
