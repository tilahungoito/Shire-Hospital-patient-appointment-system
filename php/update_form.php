<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Patient Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .btn-group  a.btn-secondary:hover {
             background-color: #3084d8; /* Change the background color on hover */
         }
         .btn-group a.btn-secondary.active {
             background-color: #0cd4ba; /* Change the background color for the active button */
         }
         .delete-btn {
             background-color: #dc3545; /* Change the background color of the delete button */
         }
         .update-btn {
             background-color: #ffc107; /* Change the background color of the update button */
         }
     </style>
     <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete?");
        }

        function confirmUpdate() {
            return confirm("Are you sure you want to update?");
        }
     </script>
</head>
<body>
    <?php include "header.php"; ?>
    <nav style="width: 100%;" class="bg-dark">
    <div class="btn-group ">
        <a href="welcome1.php"title="this is home page" class="btn btn-secondary  ">Home</a>
   
        <a href="about.php" title="click here and see it" class="btn btn-secondary ">About</a>
   
        <a href="appointments.php"title="this is appointment session" class="btn btn-secondary">Appointment-Session</a>
   
        <a href="contactus.php" title="this is contact us (communication method)"class="btn btn-secondary">Contact</a>
        <a href="patientlist.php"title="this is list of patients" class="btn btn-secondary">Patients-List</a>
        <a href="update_form.php" title="update information"class="btn btn-secondary active">Update-Record</a>
    </div>
    </nav>
    <center>
    <?php
    require_once "config.php";
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Escape user inputs for security
        $appoint_nu = mysqli_real_escape_string($link, $_POST['appointment_id']);
    
        // Check if the appointment exists
        $sql = "SELECT * FROM patients_info WHERE appointment_number = '$appoint_nu'";
        $result = mysqli_query($link, $sql);
    
        if (mysqli_num_rows($result) > 0) {
            // Appointment found, display the record
            $row = mysqli_fetch_assoc($result);
            echo "<h2>Update Patient Record</h2>";
            echo "Appointment ID: " . $row['appointment_number'] . "<br>";
            echo "Full Name: " . $row['fullname'] . "<br>";
            echo "Case Type: " . $row['case_type'] . "<br>";
            echo "Phone: " . $row['phone'] . "<br>";
            echo "Appointment Date: " . $row['appointment_date'] . "<br><br>";

            // Display the update form
            echo "<form method='post' action='update.php'>";
            echo "Full Name: <input type='text' name='fullname' value='" . $row['fullname'] . "'><br><br>";
            echo "Case Type: <input type='text' name='case' value='" . $row['case_type'] . "'><br><br>";
            echo "Phone: <input type='text' name='phone' value='" . $row['phone'] . "'><br><br>";
            echo "Appointment ID: <input type='text' name='app_id' value='" . $row['appointment_number'] . "' readonly><br><br>";
            echo "Appointment Date: <input type='text' name='time' value='" . $row['appointment_date'] . "'><br><br>";
            echo "<input type='submit' name='submit' value='Update' class='update-btn' onclick='return confirmUpdate()'>";
            echo "<button class='delete-btn' onclick='return confirmDelete()'><a href='delete.php?app_id=$appoint_nu'>Delete</a></button>";
            echo "</form>";
       } 
        else {
            // Appointment not found, display a message
            echo "<br><b>Appointment with ID '$appoint_nu' is not set yet.</b><br><br>";
        }
    }
    ?>

    <h2>Search Patient Record</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Appointment ID: <input type="text" name="appointment_id"><br><br>
        <input type="submit" name="submit" value="Search">
    </form>

    <?php include "footer.php"; ?>
    </center>
</body>
</html>