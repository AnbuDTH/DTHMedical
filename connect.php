<?php 
$conn = new mysqli("localhost","dth","cFCe9hLxWb28JMPA","dth");
if ($conn -> connect_errno) {
    echo 'Could not connect: ' . $conn -> connect_errno();
}
//mysql_select_db("dth",$link);


$home_path="https://dth.ac.in/medical/";

?>