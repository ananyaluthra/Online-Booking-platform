<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','CricketFever');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtMatchNumber = $_POST['txtMatchNumber'];
$txtNumberofTickets = $_POST['txtNumberofTickets'];


// database insert SQL code
$sql = "INSERT INTO `tbl_Client` (`Name`, `Email`, `Mtach Number`, `Quantity') VALUES ($txtName', '$txtEmail', '$txtMatchNumber', '$txtNumberofTickets')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>