<?php
class account{
	public $username;
	public $password;
	public function __construct(){
		$this->con = mysqli_connect('localhost','root','','ocss');
	}
	public function manageaccount(){
		$sf = "SELECT * from admin where acount_type = 'faculty dean'";
		$res = mysqli_query($this->con, $sf);
		echo "<table ><tr><th>No<th>User Name<th>Password<th>full name<th>Department<th> Remove</tr>";
		$c=0;
		while($row=mysqli_fetch_array($res, MYSQLI_ASSOC))
        {
        	$c++;
		echo "<tr>";
		echo "<td>".$c;
		echo "<td>".$row['user_name']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td>".$row['full_name']."</td>";
		echo "<td>".$row['faculty']."</td>";
		echo "<td><a href='javascript:delete_account(".json_encode($row['password']).")'><img src='../images/images/delete.png' width=20px alt='Delete'></a></td>";
		echo "</tr>"; 
         }
		 echo "</table>";
	}
	public function managefacultyaccount(){
		$fac = $_SESSION['faculty'];
		$sf = "SELECT * from admin where faculty = '$fac' and acount_type = 'department dean'";
		$res = mysqli_query($this->con, $sf);
		echo "<table><tr><th>No<th>User Name<th>Password<th>Department<th>Full Name<th> Remove</tr>";
		$c=0;
		while($row=mysqli_fetch_array($res, MYSQLI_ASSOC)){
        	$c++;
			echo "<tr>";
			echo "<td>".$c;
			echo "<td>".$row['user_name']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "<td>".$row['department']."</td>";
			echo "<td>".$row['full_name']."</td>";
			echo "<td><a href='javascript:delete_facaccount(".json_encode($row['password']).")'><img src='../images/images/delete.png' width=20px alt='Delete'></a></td>";
			echo "</tr>"; 
	         }
			 echo "</table>";	
	}
	public function managedepartmentaccount(){
		$dep = $_SESSION['department'];
		$sf = "SELECT * from admin where department = '$dep' and acount_type = 'instructor'";
		$res = mysqli_query($this->con, $sf);
		echo "<table><tr><th>No<th>User Name<th>Password<th>Full Name<th> Remove</tr>";
		$c=0;
		while($row=mysqli_fetch_array($res, MYSQLI_ASSOC)){
        	$c++;
			echo "<tr>";
			echo "<td>".$c;
			echo "<td>".$row['user_name']."</td>";
			echo "<td>".$row['password']."</td>";
			echo "<td>".$row['full_name']."</td>";
			echo "<td><a href='javascript:delete_instructoraccount(".json_encode($row['password']).")'><img src='../images/images/delete.png' width=20px alt='Delete'></a></td>";
			echo "</tr>"; 
	         }
			 echo "</table>";	
	}
}
?>