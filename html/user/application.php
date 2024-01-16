<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";
$conn=new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $company = $_POST['company'];
    $job = $_POST['postname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Insert data into candidateapplied table
    $sql = "INSERT INTO candidateapplied (company, job, name, email, phone) VALUES ('$company', '$job', '$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Application submitted successfully');
            window.location.href='userdash.html';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>
