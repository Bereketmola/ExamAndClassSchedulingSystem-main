<!DOCTYPE HTML>
<html>
<head>
<title>Home page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/font-awesome.css" rel="stylesheet prefetch" type="text/css"/>
<link rel="../stylesheet" type="text/css" href="css/magnific-popup.css">
<script src="../js/jquery.min.js"></script>
</head>
<body>
<!-- start header -->
<div id='container'>
	<div id='systemlogo'><img src="../images/images/kas.jpg"></div>
	<?php include_once 'navigation.php'; ?>
<div id='content2'>
	<h1 align='center'>System Services</h1>
	<div id = 'imagewithdescription'>
		<p style = "margin-left:5%;">The system Online class Scheduling provides the following services to the user :-</p>
		<h2>1, Classroom schedule</h2>
		<p><img src = ../images/images/icon2.jpg style="float:left; margin-left:4%;margin-right:4%;height:100px;border-radius: 70%;">
		Scheduler(Department head) will Stores course, Instructor, section information, and all other schedule releted then
					 			system genrates schedule table.
		</p>
		<h2>2, Exam schedule</h2>
		<p><img src = ../images/images/exam2.png style="float:left; margin-left:4%;margin-right:4%;height:80px;border-radius: 70%;">
		Exam scheduler (Department head) will give only time taken for each course to all year(batch) then system generates exam 
							 	schedule table automaticaly
		</p>

		<h2>3, Makeup Services</h2>
		<p><img src = ../images/images/makeup2.png style="float:left; margin-left:4%;margin-right:4%;height:80px;border-radius: 70%;">
		Intructor will reserv free classroom on online if he want to give makeup for his or her students by selecting to which section
		and to which year he/she want to give.
		</p>
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