<!DOCTYPE HTML>
<html>
<head>
<title>Home page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/font-awesome.css" rel="stylesheet prefetch" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../css/magnific-popup.css">
<script src="../js/jquery.min.js"></script>

</head>
<body>
<!-- start header -->
<div id='container'>
	<div id='systemlogo'><img src="../images/images/gg.jpg"></div>
	<?php include_once 'navigation.php'; ?>
<div id='content2'>
	<h1 align='center'>View Schedule</h1>
	<div id = 'holdschedule'>
	<div id = 'viewschedule'>
		<form action = 'viewschedulenewwindow.php' method = 'POST'>
			<table>
				<tr><th colspan = 3><center>Fill Your Information</tr>
				<tr><td>Department<td>: <td><select name = 'department' required >
					<option></option>
					<?php
					$con = mysqli_connect('localhost', 'root', '', 'ocss');
				$ss = "SELECT * from fandd ";
				$rss = mysqli_query($con, $ss);$rss3 = mysqli_query($con, $ss);
				$rss2 = mysqli_query($con, $ss);
				while($row = mysqli_fetch_array($rss)){
					$sel = "SELECT * from course_information where department = '$row[department_name]' ";
					$rs = mysqli_query($con, $sel)or die(mysqli_error($con));
					$nr = mysqli_num_rows($rs);
					$row1 = mysqli_fetch_array($rs);
					echo '<div >';
					if($nr >= 1){
						echo "<option>".$row1['department']."</option>";						

					}
				}
					?></select>
					</tr>
			<tr><td>Year<td>:<td> <select name = 'year' required>
			<option></option>
		<option>First Year</option>
		<option>Second Year</option>
		<option>Thrid Year</option>
		<option>Fourth Year</option>
		<option>Fifth Year</option>
		<option>Sixth Year</option>
		<option>Seventh Year</option>
		</select></tr>
		<tr><td>Schedule Type<td>:<td> 
			<select name = 'sechedule' required>
				<option></option>
				<option value = 'ClassRoom Schedule' >ClassRoom Schedule</option>
				<option value = 'Exam  Schedule'>Exam  Schedule</option>
				<option value = 'Makeup Services'>Makeup Services</option>
			</select>
	</tr>
		<tr><td colspan = 3><center>
			<button name = 'view' >View</button>
			<input type = 'reset' value = 'Cancel'>

		</tr>
	</table>
		</form>
	</div>
		</div>
	<div id="cal">

		<div id = 'departments'>
				<?php include_once '../viewscheduleandexam.php'; ?>
			
		</div>
	</div>
</div>	
</div>
<div id = 'footer'>
	<?php include_once '../department dean/footer.php'; ?>
</div>
</body>
</html>		