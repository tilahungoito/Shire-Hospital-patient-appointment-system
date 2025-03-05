<!DOCTYPE html>
<html lang="en">
<head>
    <title>appointment </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .btn-group  a.btn-secondary:hover {
             background-color: #3084d8; /* Change the background color on hover */
         }
         .btn-group a.btn-secondary.active {
             background-color: #0cd4ba; /* Change the background color for the active button */
         }
       
   
         
     </style>
   </head>
<body>
    
    <?php include "header.php"; ?>
    <nav style="width: 100%;" class="bg-dark">
    <div class="btn-group ">
        <a href="welcome1.php"title="this is home page" class="btn btn-secondary  ">Home</a>
   
        <a href="about.php" title="click here and see it" class="btn btn-secondary ">About</a>
   
        <a href="appointments.php"title="this is appointment session" class="btn btn-secondary active">Appointment-Session</a>
   
        <a href="contactus.php" title="this is contact us (communication method)"class="btn btn-secondary">Contact</a>
        <a href="patientlist.php"title="this is list of patients" class="btn btn-secondary">Patients-List</a>
        <a href="update_form.php" title="update information"class="btn btn-secondary">Update-Record</a>
        

    </div>
    </nav>
    
    <?php 
    require_once "config.php";

        // Escape user inputs for security 
        $fullname = mysqli_real_escape_string($link, $_REQUEST['fullname']); 
        $case_type = mysqli_real_escape_string($link, $_REQUEST['case']); 
        $tele = mysqli_real_escape_string($link, $_REQUEST['phone']); 
        $appoint_nu = mysqli_real_escape_string($link, $_REQUEST['app_id']);
        $date = mysqli_real_escape_string($link, $_REQUEST['time']);

        // Attempt insert query execution 
        $sql = "INSERT INTO patients_info (fullname, case_type, phone,appointment_number,appointment_date) VALUES ('$fullname', '$case_type', '$tele', '$appoint_nu','$date')"; 
        if(mysqli_query($link, $sql))
          {
           
            header("location:appointments.php");
          }
        else 
          { 
             echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          } 
        // Close connection
        mysqli_close($link);
    ?>
    <?php include "footer.php"; ?>
  
</body>


</html>