<script>
$(document).ready(function(){
	$('#sub_admin').hide();
	$('#sub_faculty_dean').hide();
	$('#sub_department_head').hide();
	$('#sub_inst').hide();
	$('#admin').click(function(){
	$('#sub_faculty_dean').hide();
	$('#sub_department_head').hide();
	$('#sub_inst').hide();
	$('#sub_admin').slideDown(800);
	});
	$('#faculty').click(function(){
	$('#sub_admin').hide();
	$('#sub_department_head').hide();
	$('#sub_inst').hide();
	$('#sub_faculty_dean').slideDown(800);
	});
	$('#department').click(function(){
	$('#sub_admin').hide();
	$('#sub_faculty_dean').hide();
	$('#sub_inst').hide();
	$('#sub_department_head').slideDown(800);
	});
	$('#instt').click(function(){
	$('#sub_admin').hide();
	$('#sub_department_head').hide();
	$('#sub_faculty_dean').hide();
	$('#sub_inst').slideDown(800);
	});
});
</script>
<table id = 'ff'>
	<tr>
		<th id = 'admin' >Admin &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-angle-double-down"></i>
	</tr>
	<tr>
		<td>
			<table id = 'sub_admin'>
				<tr>
					<th>Name<th>Maneges<th>Email<th>Phone
				</tr>
				<?php
				$con = mysqli_connect('localhost', 'root','','ocss');
				$sel = "SELECT * from admin where acount_type = 'admin'";
				$rs = mysqli_query($con, $sel);
				while($row = mysqli_fetch_array($rs)){
					echo '<tr>';
					echo '<td>'.$row['full_name'];
					echo '<td>System Admin';
					echo '<td>'.$row['email'];
					echo '<td>'.$row['phone'];
					echo '</tr>';
				}
				?>
			</table>
	</tr>
	<tr>
		<th id = 'faculty'>Faculty Dean &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-angle-double-down"></i>
	</tr>
	<tr>
		<td>
			<table id = 'sub_faculty_dean'>
				<tr>
					<th>Name<th>Maneges<th>Email<th>Phone
				</tr>
				<?php
				$con = mysqli_connect('localhost', 'root','','ocss');
				$sel = "SELECT * from admin where acount_type = 'faculty dean'";
				$rs = mysqli_query($con, $sel);
				while($row = mysqli_fetch_array($rs)){
					echo '<tr>';
					echo '<td>'.$row['full_name'];
					echo '<td>'.$row['faculty'];
					echo '<td>'.$row['email'];
					echo '<td>'.$row['phone'];
					echo '</tr>';
				}
				?>
			</table>
	</tr>
	<tr>
		<th id = 'department' >Department Head &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-angle-double-down"></i>
	</tr>
	<tr>
		<td>
			<table id = 'sub_department_head'>
				<tr>
					<th>Name<th>Maneges<th>Email<th>Phone
				</tr>
				<?php
				$con = mysqli_connect('localhost', 'root','','ocss');
				$sel = "SELECT * from admin where acount_type = 'department dean'";
				$rs = mysqli_query($con, $sel);
				while($row = mysqli_fetch_array($rs)){
					echo '<tr>';
					echo '<td>'.$row['full_name'];
					echo '<td>'.$row['department'];
					echo '<td>'.$row['email'];
					echo '<td>'.$row['phone'];
					echo '</tr>';
				}
				?>
			</table>
	</tr>
	<tr>
		<th id = 'instt' >Instructor &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<i class="fa fa-angle-double-down"></i>
	</tr>
	<tr>
		<td>
			<table id = 'sub_inst'>
				<tr>
					<th>Name<th>Teaches In<th>Email<th>Phone
				</tr>
				<?php
				$con = mysqli_connect('localhost', 'root','','ocss');
				$sel = "SELECT * from admin where acount_type = 'instructor'";
				$rs = mysqli_query($con, $sel);
				while($row = mysqli_fetch_array($rs)){
					echo '<tr>';
					echo '<td>'.$row['full_name'];
					echo '<td>'.$row['department'];
					echo '<td>'.$row['email'];
					echo '<td>'.$row['phone'];
					echo '</tr>';
				}
				?>
			</table>
	</tr>
</table>
<?php ?>