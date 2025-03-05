<!DOCTYPE html>
<html lang="en">
<head>
    <title>patients list</title>
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
   
        <a href="appointments.php"title="this is appointment session" class="btn btn-secondary">Appointment-Session</a>
   
        <a href="contactus.php" title="this is contact us (communication method)"class="btn btn-secondary">Contact</a>
        <a href="patientlist.php"title="this is list of patients" class="btn btn-secondary active">Patients-List</a>
        <a href="update_form.php" title="update information"class="btn btn-secondary">Update-Record</a>
       
    </div>
    </nav>
    
        <?php 
           require_once "config.php";
            // Attempt select query execution 
            $sql = "SELECT * FROM patients_info"; 
            if($result = mysqli_query($link, $sql))
             { 
               if(mysqli_num_rows($result) > 0)
                 { 
                  echo "<table>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patient Name&nbsp;</th>";
echo "<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diagnosis/Case Type&nbsp;</th>";
echo "<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telephone&nbsp;</th>";
echo "<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Patient Card Number&nbsp;</th>";
echo "<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Appointment Time&nbsp;</th>";
echo "</tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['fullname'] . "</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['case_type'] . "</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['phone'] . "</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['appointment_number'] . "</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['appointment_date'] . "</td>";
    echo "</tr>";
}

echo "</table>";
             
              // Free result set 
              mysqli_free_result($result); 
              }

             else
               { 
                 echo "No records"; 
               } 
            } 
            else
            { 
               echo "ERROR: Could not execute $sql.". mysqli_error($link); 
            } 

            // Close connection 
            mysqli_close($link); 
            ?>


    <?php include "footer.php"; ?>
    
</body>


</html>