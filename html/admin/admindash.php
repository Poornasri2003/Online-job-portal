<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../../css/admindash.css">
</head>
<body>

  <div class="left-nav">
    <h1>Admin Dashboard</h1>
    <div class="nav-item" id="jobsItem"><a href="#">Jobs</a></div>
    <div class="nav-item" id="candidateItem"><a href="../../php/candidate.php">Candidate applied</a></div>
    <div class="nav-item" id="aboutItem"><a href="about.html">About</a></div>
    <div class="nav-item" id="aboutItem"><a href="../../index.html">  Logout</a></div>
    
  </div>
  <div class="content">
    <!-- Your main content goes here -->
<!--php code for tables-->
 
<div class="posted-jobs">
<button class="post-job-button" onclick="toggleJobForm()">Post Job</button>
      <h2>Posted Jobs</h2>
      <div id="tableformat">
      <?php
        // Include the connection file
        include 'connection.php';

        // Fetch all jobs from the database
        $result = $conn->query("SELECT * FROM job");

        // Check if there are any rows
        if ($result->num_rows > 0) {
          echo "<table border='1'>";
          echo "<tr><th>Company</th><th>Post</th><th>Skills</th><th>Description</th><th>Salary</th><th>Location</th></tr>";
          // Output data of each row
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["comapany"] . "</td>";
            echo "<td>" . $row["postname"] . "</td>";
            echo "<td>" . $row["skills"] . "</td>";
            echo "<td>" . $row["descriptjob"] . "</td>";
            echo "<td>" . $row["salary"] . "</td>";
            echo "<td>" . $row["location"] . "</td>";
            echo "</tr>";
          }
          echo "</table>";
        } else {
          echo "No jobs posted yet.";
        }

        // Close the database connection
        $conn->close();
      ?>
    </div>
      </div>
<!--php ends-->

    <div class="job-form" id="jobForm" >
        <form action="admin.php" method="POST">
          <div class="form-field">
            <label for="comapany">Company:</label>
            <input type="text" id="comapany" name="comapany"required>
          </div>
          <div class="form-field">
            <label for="postname">Post:</label>
            <input type="text" id="postname" name="postname"required>
          </div>
          <div class="form-field">
            <label for="skills">Skills Required:</label>
            <input type="text" id="skills" name="skills">
          </div>
          <div class="form-field">
            <label for="descriptjob">Job description:</label>
            <textarea id="descriptjob" name="descriptjob"></textarea>

          </div>
          <div class="form-field">
            <label for="salary">Salary:</label>
            <input type="text" id="salary" name="salary">
          </div>
          <div class="form-field">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location">
          </div>
          <input type="submit" value="POST JOB" onClick="mess()">
        </form>
      </div>
</div>

  <script>
    function toggleGrayShadeNav() {
      var grayShadeNav = document.getElementById('grayShadeNav');
      grayShadeNav.style.display = (grayShadeNav.style.display === 'none' || grayShadeNav.style.display === '') ? 'block' : 'none';
    }
    function toggleJobForm() {
    var jobForm = document.getElementById('jobForm');
    var tableFormat = document.getElementById('tableformat');

    if (jobForm.style.display === 'none' || jobForm.style.display === '') {
        // Display the form in the middle of the page
        jobForm.style.position = 'fixed';
        jobForm.style.top = '50%';
        jobForm.style.left = '50%';
        jobForm.style.transform = 'translate(-50%, -50%)';
        jobForm.style.width = '300px'; // Set your preferred width
        document.body.appendChild(jobForm);
        jobForm.style.display = 'block';
    } else {
        // Hide the form
        jobForm.style.display = 'none';
        document.body.appendChild(jobForm); // Move the form back to its original position
    }
}



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


