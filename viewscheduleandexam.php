<script>
$(document).ready(function() {
	$('#sub-class').hide();
	$('#sub-exam').hide();
	$('#sub-makeup').hide();
	$('#calssroom').click(function() {
		$('#sub-exam').hide();
		$('#sub-makeup').hide();		
		$('#sub-class').slideDown(2500);
	});
	$('#exam').click(function() {
		$('#sub-class').hide();
		$('#sub-makeup').hide();
		$('#sub-exam').slideDown(2500);
	});
	$('#makeup').click(function() {
		$('#sub-class').hide();
		$('#sub-exam').hide();
		$('#sub-makeup').slideDown(2500);
	});
});
</script>
<style>
#dep{
	padding: 14px;
	font-size: 20px;
}
#exam, #makeup, #calssroom{
	cursor: pointer;
	padding: 8px;
	font-size: 18px;
	margin-top: 0%;
}
</style>
		<div id = 'calander'>
			<?php include_once 'calendar/cal3.php'; ?>
		</div>
			<table style = 'width: 90%; margin-top:6%;'>
				<tr>
					<th id = 'dep' style = 'background-color:#bebfbe; padding:7px;'>Department Those Create Schedule
				</tr>
				<th>
			</table>
				<table id = 'depp' style = 'width: 90%;'>

					<tr><th id = 'calssroom' style = 'background-color:#bebf9a;'>Classroom </tr>
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
						echo "<tr><td id = 'sub-class'><a href = 'viewschedule.php?d = $row1[department] '>".$row1['department']."</a></tr>";						

					}
					echo '</div>';

				}?>
					<tr><th style = 'background-color:#bebf9a;' id = 'exam'>Exam Schedule </tr>
					<?php	
					while($row = mysqli_fetch_array($rss2)){
						$sele = "SELECT * from exam_schedule where department = '$row[department_name]' ";
						$rse = mysqli_query($con, $sele)or die(mysqli_error($con));
						$nre = mysqli_num_rows($rse);
						$rowe = mysqli_fetch_array($rse);	
										
					if($nre >= 0){
						echo "<tr><td id = 'sub-exam'><a href = 'viewschedule.php'>".$rowe['department']."</a></tr>";						

					}
				}
				?>
				<tr><th id = 'makeup' style = 'background-color:#bebf9a;'>Makeup Services </tr>
				<?php
				while($row = mysqli_fetch_array($rss3)){
					$sele = "SELECT * from registered_room where department = '$row[department_name]' ";
						$rse = mysqli_query($con, $sele)or die(mysqli_error($con));
						$nre = mysqli_num_rows($rse);
						$rowe = mysqli_fetch_array($rse);	
										
					if($nre >= 0){
						echo "<tr><td id = 'sub-makeup'><a href = 'viewschedule.php'>".$rowe['department']."</a></tr>";						

					}
				}
		?>
		</table>