<?php

 include "header.php"; 
 include "menu.php"; 
 ?>
 
<center>
 <?php
require_once "config.php";
// Escape user input for security
$appoint_nu = mysqli_real_escape_string($link, $_REQUEST['app_id']);

// Prepare the DELETE statement
$sql = "DELETE FROM patients_info WHERE appointment_number = '$appoint_nu'";

// Execute the query
if(mysqli_query($link, $sql))
{
    //echo "<br><b>Record deleted successfully.</b><br><br>";
    header("location:update_form.php");
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close the connection
mysqli_close($link);
?>
</center>
<?php
 include "footer.php"; 
?>
?>