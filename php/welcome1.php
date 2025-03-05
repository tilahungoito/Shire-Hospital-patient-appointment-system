<?php
// Initialize the session
/*session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}*/
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{ font: 14px sans-serif; }
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
        <a href="welcome1.php"title="this is home page" class="btn btn-secondary  active">Home</a>
   
        <a href="about.php" title="click here and see it" class="btn btn-secondary ">About</a>
   
        <a href="appointments.php"title="this is appointment session" class="btn btn-secondary">Appointment-Session</a>
   
        <a href="contactus.php" title="this is contact us (communication method)"class="btn btn-secondary">Contact</a>
        <a href="patientlist.php"title="this is list of patients" class="btn btn-secondary">Patients-List</a>
        <a href="update_form.php" title="update information"class="btn btn-secondary">Update-Record</a>
        
    </div>
    </nav>

        <br>
       <!-- <a href="reset-password.php" class="btn btn-warning ml-6">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-6">Sign Out of Your Account</a>-->
       <img src="sh.jpg">
       <p style="width:40%; float:right;">
       Shire Referral Hospital is a reputable healthcare institution that plays a crucial
        role in providing quality healthcare services to the residents of Shire and
         its neighboring areas. With its modern infrastructure, dedicated medical staff, and
          a wide range of medical specialties,
        the hospital is committed to delivering compassionate care and improving the health
         outcomes of its patients. Shire Referral Hospital stands as a beacon of hope for
          the community, ensuring access to reliable healthcare services when they are needed the most.
       </p>
   
    <?php include "footer.php"; ?>
   
</body>
</html>