<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$Lname = $_REQUEST['Lname'];
$Fname = $_REQUEST['FName'];
$MI = $_REQUEST['MI'];
$Bday   = $_REQUEST['Birthday'];
$Contact = $_REQUEST['Contact'];
$Course =  $_REQUEST['Course'];
$Position =  $_REQUEST['Position'];
$StudentNo =  $_REQUEST['StudentNo'];
$Platform = $_REQUEST['Platform'];

$sql = "INSERT INTO Candidates(Lname,fname,mi,birthday,contact,course,position,studentno,platform)
        values ('$Lname', '$Fname', '$MI', '$Bday', '$Contact', '$Course', '$Position', '$StudentNo', '$Platform', )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location: pending.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
