<?php
$con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
$fn = $_GET['id_number'];
$query = "DELETE from faculty where faculty_name='$fn'";
mysql_query($query);
header("Location: managfaculty.php");	
?>
