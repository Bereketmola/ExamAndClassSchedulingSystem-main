<?php
class faculty{
	public $con;
	public function __construct(){
		$this->con = new mysqli('localhost', 'root', '', 'ocss');
		if(mysqli_connect_error()){
			echo "Error :could not connect to Database";
			exit;
		}
	}
	public function addfaculty($fn, $campus){
		$addf = "INSERT into faculty VALUES('$fn', '$campus')";
		$rsl = mysqli_query($this->con, $addf)or die("Existed Faculty");
		echo "<img src='../images/images/succes.png' width=25px><a href='managfaculty.php'>View Record</a>";
	}
	public function managefaculty(){
		$sf = "SELECT * from faculty";
		$res = mysqli_query($this->con, $sf);
		echo "<table><tr><th><center>No<th><center>Department name<th><center> campus<th><center>Edit<th>Delete</center></tr>";
		$c=0;
		while($row=mysqli_fetch_array($res, MYSQLI_ASSOC)){
	        $c++;
			echo "<tr>";
			echo "<td><center>".$c;
			echo "<td><center>".$row['faculty_name']."</center></td>";
			echo "<td><center>".$row['campus']."</center></td>";
			echo "<td><center><a href='editfaculty.php?i=$row[faculty_name]'>
			<img src='../images/images/edit5.png' width=25px title='Edit'>
			</center></a>";
			echo "<td><center><a href='javascript:delete_faculty(".json_encode($row['faculty_name']).")'>
			<img src='../images/images/delete.png' width=20px title='Delete'>
			</a></center></td>";
			echo "</tr>";
         }
		 echo "</table>";
	}
	public function addfacultymanager($fn, $ln, $id, $faculty){
		$addfm = "INSERT into faculty_manager values('$fn', '$id', '$faculty')";
		$res = mysqli_query($this->con, $addfm)or die(mysqli_error($this->con));
		echo "<img src='../images/images/succes.png' width=25px><a href='managefacultymanager.php'>View Record</a>";

	}
	public function managefacultymanager(){
		$sf = "SELECT * from faculty_manager";
		$res = mysqli_query($this->con, $sf);
		echo "<table><tr><th><center>No<th><center> Name<th><center>ID<th><center>Department<th><center>Edit<th><center>Delete</tr>";
		$c=0;
		while($row=mysqli_fetch_array($res, MYSQLI_ASSOC)){			
        	$c++;
			echo "<tr>";
			echo "<td><center>".$c;
			echo "<td><center>".$row['full_name']."</td>";
			echo "<td>".$row['id']."</td>";
			echo "<td><center>".$row['faculty']."</td>";
			echo "<td><center><a href='editfacultymanager.php?i=$row[id]'><img src='../images/images/edit5.png' width=25px alt='Edit'></a>";
			echo "<td><center><a href='javascript:delete_fm($row[id])'><img src='../images/images/delete.png' width=20px alt='Delete'></a>";
			echo "</tr>"; 
	    }
		 echo "</table>";
	}
}
?>

