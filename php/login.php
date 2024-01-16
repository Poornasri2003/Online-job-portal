<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform validation and login check
    $sql = "SELECT * FROM userdetails WHERE name='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Successful login
     echo "<script>
     alert('Login successful');
     window.location.href='../html/user/userdash.html';
     </script>";
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
}

$conn->close();
?>
