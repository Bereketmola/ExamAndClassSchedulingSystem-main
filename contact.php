<!DOCTYPE HTML>
<html>
<head>
<title>Home page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet prefetch" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script src="js/jquery.min.js"></script>
<script src="../jquery/jquery.js"></script>
<style>
#topnav #contact {
	text-decoration: underline;
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
	<h1 align='center'>Contact information</h1>
	<div id = 'contacinfo'>
		<?php include_once 'conact info.php'; ?>
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