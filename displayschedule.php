<?php 

class viewschedule{
	public function __construct(){
		$this->con = new mysqli('localhost', 'root', '', 'ocss');
		if(mysqli_connect_error()){
			echo "connection failed";
			exit;
		}
	}
	public function viewclassroomschedule(){
		$dep = $_POST['department'];
    $_SESSION['department'] = $_POST['department'];
        $seclg = "SELECT MAX(number) FROM section_information where department = '$dep' and year = '$_POST[year]' order by number desc";
        $rr = mysqli_query($this->con, $seclg)or die(mysqli_error($this->con));
        $row = mysqli_fetch_array($rr);
        $sec = $row[0];
        $secarray = array('', 'Section One', 'Section Two', 'Section Three', 'Section Four ', 'Section Five',
         'Section Six', 'Setion Seven', 'Section Eight', 'Section Nine');
         for($s = 1; $s <= $sec; $s++){
		      echo '<table><tr><td><h4>'.$secarray[$s].'</h4>';
		      $query1="SELECT * FROM ddt INNER JOIN course_information ON course_information.dt = ddt.id and 
		        course_information.department='$dep' and course_information.section='section $s' and course_information.year='$_POST[year]'";
		      $result = mysqli_query($this->con,$query1)or die(mysqli_error($this->con));
		      $nmrs=mysqli_num_rows($result);
		      if($nmrs >= 1){
			        echo "<table border = 1><tr><td>Day <td>Time<td>Room<td>Course Title<td>Credite Houre<td>Instructor</tr>";
			        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			            echo "<tr>";
			            echo "<td>".$row['day']."</td>";
			            echo "<td>".$row['time']."</td>";
			            echo "<td>".$row['room']."</td>";
			            echo "<td>".$row['course_title']."</td>";
			            echo "<td>".$row['credite_houre']." Cr.Hr </td>";   
			            echo "<td>".$row['instructor']."</td>";
			            echo "</tr>"; 
			        }
			             echo "</table>";
			    }
          else {
          echo "<h3 style='color:red; font-family:Bradley Hand ITC;'>No schedule information for ".$dep ." ".$_POST['year']."</h3>";
      }
          echo '</tr></table>';
         }   
         echo "</tr></table>";        
	}
	public function viewexamschdule(){
		$dep = $_POST['department'];
		$year = $_POST['year'];              
    $seclg = "SELECT MAX(number) FROM section_information where department = '$dep' and year = '$_POST[year]' order by number desc";
    $rr = mysqli_query($this->con, $seclg)or die(mysqli_error($this->con));
    $row = mysqli_fetch_array($rr);
    $sec = $row[0]; 
    $query1="SELECT * FROM course where department = '$dep' and year = '$_POST[year]' ";
    $result = mysqli_query($this->con,$query1)or die(mysqli_error($this->con));
    if(mysqli_num_rows($result) >= 1){
      echo "<table border=1 id = schedule><tr><td>Day<td>Time<td>Course Title<td>Room<td>Examiner<td>section</td></tr>";
      while($row = mysqli_fetch_array($result)){ $q = 0;
        $sel = "SELECT * from exam_schedule where department = '$dep' and course_title = '$row[course_title]' and year = '$_POST[year]'";
        $rsel = mysqli_query($this->con, $sel)or die(mysqli_error($this->con));
        while($row1 = mysqli_fetch_array($rsel)){
          echo "<tr><td if($q != 0){ rowspan = $sec; }>".$row1['day'];
          echo "<td if($q != 0){ rowspan = $sec; }>".$row1['time'];
          echo "<td if($q != 0){ rowspan = $sec; }>".$row1['course_title'];
          if($q == 0){
            echo "<td>".$row1['room']."</td>";  
            echo "<td>".$row1['examiner']."</td>";
            echo "<td>".$row1['section']."</tr>";
          }
          while($row1=mysqli_fetch_array($rsel, MYSQLI_ASSOC)) {
              echo "<td>".$row1['room']."</td>";  
              echo "<td>".$row1['examiner']."</td>";
              echo "<td>".$row1['section']."</td>";
              echo "</tr>"; $q++;
          }
        }
      }   echo "</table>";
  }
  else{

          echo "<center><h3 style='color:red; font-family:Bradley Hand ITC;'>No schedule information for ".$dep ." ".$_POST['year']."</h3>";
  }
	}
  public function viewmakeup(){
    $dep = $_POST['department'];
    $year = $_POST['year'];
    $sel = "SELECT * from registered_room where department = '$dep' and year = '$year'";
    $rs = mysqli_query($this->con, $sel)or die(mysqli_error($this->con));
    $nr = mysqli_num_rows($rs);
    if($nr >= 1){
      echo '<table border = 1><tr><th>Room<th>day<th>Time<th>Instructor</tr>';
      while($row = mysqli_fetch_array($rs)){
        echo '<tr>';
        echo '<td><center>'.$row['room'];
        echo '<td><center>'.$row['day'];
        echo '<td><center>'.$row['time'];
        echo '<td><center>'.$row['instructor_name'];
        echo '</tr>';
      }
      echo '</table>';
    }
    else echo '<center>no Regitred room for '.$dep. ' department '.$year;
  }
}

?>