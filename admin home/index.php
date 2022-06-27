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
	<div id='systemlogo'><img src="../images/images/kas.jpg"></div>
	<?php include_once 'navigation.php'; ?>
<div id='content2'>
	<h1 align='center'>Wellcome to Online  Scheduling System</h1>
	<div id = 'dicandslid'>
		
		
		<div id = 'description'>
			<p>This is scheduling system of Dilla University for reqular Student.
		       The system would give the following function for user's.</p>
		       <p> It enables :-<br>
				<div id = 'enables'>
				<p>
				<i class="fa fa-hand-o-right"></i> Department Dean to assing class room for department under the faculty.
				<i class="fa fa-hand-o-right"></i> Stream dean to create schedule for the student.<br>
				<i class="fa fa-hand-o-right"></i> Instructor to access schedule of his course and also allows to reserv free class for makeup.<br>
				<i class="fa fa-hand-o-right"></i> Student to access schedule information</p>
			</div>
			</p>
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