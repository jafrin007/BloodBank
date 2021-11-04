<?php
require_once"config.php";
$id = $_GET['id']; // get id through query string

$del = mysqli_query($connection,"delete from donor where id = '$id'"); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("location:donor.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
