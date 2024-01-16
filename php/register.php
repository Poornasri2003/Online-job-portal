<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/index.css" type="text/css" rel="stylesheet">  
</head>
  <body>
  <div id="form" >
    <h1>REGISTER</h1>
    <form name="form" action="register.php" method="POST" >
      <label >Name:</label>
      <input type="text" id="user" name="user" required><br>
      <label >Email:</label>
      <input type="text" id="mailid" name="mailid" required><br>
      <label >Phone:</label>
      <input type="text" id="phone" name="phone" required><br>
      <label >Password:</label>
      <input type="password" id="pass" name="pass"><br>

      <input type="submit"   value="REGISTER">
      
  
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include 'connection.php';

if(isset($_POST['user']) && isset($_POST['pass'])) {
    $name = $_POST['user'];
    $mailid=$_POST['mailid'];
    $phone=$_POST['phone'];
    $password = $_POST['pass'];

    $sql = "INSERT INTO userdetails values('$name','$mailid','$phone','$password')";

    if ($conn->query($sql) === TRUE) {
        // Successful insertion
        echo'<script>

        alert("register successful");
        window.location.href="../html/login.html";
        </script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
