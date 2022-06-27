 <?php
$con=mysqli_connect('localhost','root','','ocss')or die('<h2>connection failed</h2>');
$df = $_GET['dd'];
$sql_query="DELETE FROM faculty WHERE faculty_name=$df";
mysqli_query($con, $sql_query);
header("Location: managfaculty.php");	
?>
