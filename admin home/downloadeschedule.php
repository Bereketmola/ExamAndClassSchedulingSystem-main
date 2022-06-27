<?php
require("pdf/fpdf.php");
$dep = $_SESSION['department'];
$pdf = new FPDF();
$pdf->Addpage();
$pdf->SetFont("Arial","b",12);
$pdf->Cell(0,5,"University Of Gondar",0,1,C);
$pdf->Cell(0,5,"Department of  $dep ",0,1,C);
	$seclg = "SELECT MAX(number) FROM section_information where department = '$dep' and year = '$_POST[year]' order by number desc";
	$rr = mysqli_query($this->con, $seclg)or die(mysqli_error($this->con));
	$row = mysqli_fetch_array($rr);
	$sec = $row[0];
	$secarray = array('', 'Section One', 'Section Two', 'Section Three', 'Section Four ', 'Section Five',
	 'Section Six', 'Setion Seven', 'Section Eight', 'Section Nine');
	for($s = 1; $s <= $sec; $s++){
	      $pdf->Cell(0,5,"$secarray[$s]",0,1,C);
	      $pdf->output();
	      $query1="SELECT * FROM ddt INNER JOIN course_information ON course_information.dt = ddt.id and 
	        course_information.department='$dep' and course_information.section='section $s' and course_information.year='$_POST[year]'";
	      $result = mysqli_query($this->con,$query1)or die(mysqli_error($this->con));
	      $nmrs=mysqli_num_rows($result);
	      if($nmrs >= 1){
		        $pdf->Cell(0,5,"Day",0,1,C);
		        $pdf->Cell(0,5,"Time",0,1,C);
		        $pdf->Cell(0,5,"Room",0,1,C);
		        $pdf->Cell(0,5,"Course Title",0,1,C);
		        $pdf->Cell(0,5,"Credite Houre",0,1,C);
		        $pdf->Cell(0,5,"Instructor",1,1,C);
		        while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		            $pdf->Cell(0,5,"$row[day]",0,1,C);
		            $pdf->Cell(0,5,"$row[time]",0,1,C);
		            $pdf->Cell(0,5,"$row[room]",0,1,C);
		            $pdf->Cell(0,5,"$row[course_title]",0,1,C);
		            $pdf->Cell(0,5,"$row[credite_houre]",0,1,C);
		            $pdf->Cell(0,5,"$row[instructor]",1,1,C);  
		            
		        }
		    }
	  else {
	  $pdf->Cell(0,5,"No schedule information for ".$dep ." ".$_POST['year'],1,1,C);
		} 

	}    
$pdf->output();
?>