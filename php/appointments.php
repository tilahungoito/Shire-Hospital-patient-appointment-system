<!DOCTYPE html>
<html lang="en">
<head>
    <title>appoitment</title>
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
    
        <form action= "appointment.php" method="post" style="border:3px solid ;margin-left:20%;margin-top: 1%;padding-top:0%; width: 42%; padding: 40px;">
            <p>
                <h4>
                  Fill out valid information in each input-text.
                </h4>
                <label for="name"><b>Patient Name:</b></label>
                <input type="text"placeholder="patient name" name="fullname" id="name" required>
            </p>
            <p>
                <label for="case"><b>Case Type:</b></label>
                <input type="text"placeholder="case type" name="case" id="case">
            </p>
            <p>
                <label for="phone"><b>Phone:</b></label>
                <input type="phone" placeholder="phone number"name="phone" id="phone" required>
            </p>
            <p>
                <label for="appointment"><b>Appointment Number:</b></label>
                <input type="number" placeholder="appointment number" name="app_id" id="appointment" required>
            </p>
            <p>
                <label for="date"><b>Appointment Time</b>:</label>
                <input type="datetime-local"placeholder=" appointment time "name="time" id="date" required>
            </p>
            <input type="submit"style="background-color:gray;" value="Make Appointment">
</form>
"<?php include "footer.php"; ?>"



    
</body>

<!-- Mirrored from www.tutorialrepublic.com/codelab.php?topic=php&file=include-files by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Aug 2023 10:11:12 GMT -->
</html>