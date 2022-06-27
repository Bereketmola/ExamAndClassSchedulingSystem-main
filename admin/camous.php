<?php
class campus{
	public $campusname;
	public $campuslocation;
	public function __construct(){
		$this->con = new mysqli('localhost', 'root', '', 'ocss');
		if(mysqli_connect_error()){
			echo "Error :could not connect to Database";
			exit;
		}
	}
	public function addcampus($campusname, $location){
		$cam = "INSERT into campus values('$campusname', '$location')";
		$result = mysqli_query($this->con, $cam)or die(mysqli_error($this->con));
		echo "<img src='../images/images/succes.png' width=25px><a href='viewcampus.php'>View Record</a>";
	}
	public function managecampus(){
		$sf = "SELECT * from campus";
		$res = mysqli_query($this->con, $sf);
		echo "<table style='text-align:center;'><tr><th>No<th>Campus Name<th>Location<th colspan=2>Action</tr>";
		$c=0;
		while($row=mysqli_fetch_array($res, MYSQLI_ASSOC)){			
        	$c++;
			echo "<tr>";
			echo "<td>".$c;
			echo "<td>".$row['campus_name']."</td>";
			echo "<td>".$row['location']."</td>";
			echo "<td><a href='editcampus.php?i=$row[campus_name]'><img src='../images/images/edit5.png' width=25px alt=Edit></a>";
			echo "<td><a href='javascript:delete_campus(".json_encode($row['campus_name']).")'><img src='../images/images/delete.png' width=20px alt='Delete'></a></td>";
			echo "</tr>"; 
	    }
		 echo "</table>";
	}
}

?>