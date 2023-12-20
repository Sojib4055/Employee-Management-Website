<?php
//including the database connection file
include("process/conndatabase.php");

//getting id of the data from url
$id = $_GET['ID'];

//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM employeeinfo WHERE ID=$id");

//redirecting to the display page (index.php in our case)
header("Location:viewemp.php");
?>

