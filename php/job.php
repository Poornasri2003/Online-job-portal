<?php
include 'connection.php';

if(isset($_POST['user']) && isset($_POST['pass'])) {
    $company = $_POST['company'];
    $post=$_POST['post'];
    $skills=$_POST['skills'];
    $descript=$_POST['descript'];
    $salary=$_POST['salary'];
    $location= $_POST['location'];

    $sql = "INSERT INTO jobs values('$company','$post','$skills','$descript','$salary','$location')";

    if ($conn->query($sql) === TRUE) {
        // Successful insertion
        echo'<script>

        alert("register successful");
     
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
