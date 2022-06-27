<!DOCTYPE HTML>
<html>
<head>
<title>Home page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet prefetch" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="icon" href="images/images/our logo.png" size=18x18 type="image/png">
<script src="js/jquery.min.js"></script>
<style>
#topnav #index {
	text-decoration: none;
	 color: #efefef;
	 border-radius:2px;
}
</style>
</head>
<body>
<!-- start header -->
<div id='container'>
	<?php include_once 'navigation.php'; ?>
<div id='content2'>
	<h1 align='center'>Wellcome to Online  Scheduling  System</h1>
	<div id = 'dicandslid'>
		<div id = 'slidimage'>
			
		</div>
		
		<div id = 'description'>
			<p>This is scheduling system of Dilla University for  regular Student.
		       The system would give the following function for user's.</p>
		       <p> It enables :-<br>
				<div id = 'enables'>
				<p>
				<i class="fa fa-hand-o-right"></i> Department Stream Dean to assign class room for department under the Department Dean.<br>
				<i class="fa fa-hand-o-right"></i> Stram dean to create schedule for the student.<br>
				<i class="fa fa-hand-o-right"></i> Instructor to access schedule of his course and also allows to reserve free class for makeup.<br>
				<i class="fa fa-hand-o-right"></i> Student to access schedule information</p>
			</div>
			</p>
		</div>
	</div>
	<div id="cal">

		<div id = 'departments'>
				<?php include_once 'viewscheduleandexam.php'; ?>
		</div>
	</div>
</div>	
</div>
<div id = 'footer'>
	<?php include_once 'department dean/footer.php'; ?>
</div>
</body>
</html>		