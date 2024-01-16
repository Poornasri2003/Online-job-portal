<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/admindash.css">
  <link rel="stylesheet" type="text/css" href="../css/candidate.css">
</head>
<body>

  <div class="left-nav">
    <h1>Admin Dashboard</h1>
    <div class="nav-item" id="jobsItem"><a href="../html/admin/admindash.php">Jobs</a></div>
    <div class="nav-item" id="candidateItem"><a href="#">Candidate applied</a></div>
    <div class="nav-item" id="aboutItem"><a href="../html/admin/about.html">About</a></div>
    
  </div>
  <div class="content">
    <!-- Your main content goes here -->
    <h1>Candidate applied</h1>

  <table class="table">
    <tr>
      <th>Company</th>
      <th>Phone</th>
      <th>Name</th>
      <th>Email</th>
      <th>Post Name</th>
    </tr>

    <?php
    include './connection.php';

    // Retrieve data from candidateapplied table
    $result = $conn->query("SELECT company, phone,name, email, job FROM candidateapplied");

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $company = $row["company"];
            $postName = $row["job"];
          
            $name = $row["name"];
            $email = $row["email"];
            $phone = $row["phone"];
            echo "<tr>
                    <td>$company</td>
                    <td>$phone</td>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$postName</td>
                   
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No data found</td></tr>";
    }

    $conn->close();
    ?>
  </table>

  
  </div>

  <script>
   

    // Add this JavaScript to dynamically set the active class
    var url = window.location.href;
    if (url.includes("candidate.php")) {
      document.getElementById("candidateItem").classList.add("active");
    } else if (url.includes("about.html")) {
      document.getElementById("aboutItem").classList.add("active");
    } else {
      document.getElementById("jobsItem").classList.add("active");
    }
  </script>

</body>
</html>
