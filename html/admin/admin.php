<?php
include 'connection.php';


    $comapany = $_POST['comapany'];
    $postname=$_POST['postname'];
    $skills=$_POST['skills'];
    $descriptjob=$_POST['descriptjob'];
    $salary=$_POST['salary'];
    $location= $_POST['location'];

    $sql = "INSERT INTO job values('$comapany','$postname','$skills','$descriptjob','$salary','$location')";

    if ($conn->query($sql) === TRUE) {
        // Successful insertion
        echo'<script>
        alert("job posted successfully");
        window.location.href="admindash.php";
     
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>

