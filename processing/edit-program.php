<?php

include("../includes/conn.php");

//add post values to variables
$pid =  $_POST['pid'];
$Mname = $_POST['Mname'];




// sql query
$sth = $conn->prepare("UPDATE Majors SET Mname = '" . $Mname . "' WHERE MajorID = ". $pid);
$sth->execute();


?>
