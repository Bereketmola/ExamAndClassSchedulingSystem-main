	<head>

<link href="css/font-awesome.css" rel="stylesheet prefetch" type="text/css" media="all" />
<script>
function myFunction() {
    window.print();
}
</script>
	</head>
	<style>
	#genratedschedule{
		background-color: #cbcccb;
		width: 70%;
		margin: 0 auto;
		border-radius: 3%;
		min-height: 700px;

	}
	#genratedschedule table{
		width: 100%;
		padding:2%;  
	}
	#dd{
		width: 30%;
		height: 30px;
		margin: 0 auto;
		background-color: #efefef;
		border-radius: 10px;
		text-align: center;
	}
	#dd button{
		margin-left: 18%;
		margin-right: 18%;
		border-radius: 50%;
		cursor: pointer;
	}
	#aa {
		width: 100%;
		height: 10px;
	}
	#uu{
		text-align: center;
	}
	</style>
<div id = 'genratedschedule'>
	<div id = 'aa'>
	</div>
	<div id = 'dd'>
			<a href = 'viewschedule.php'><i class="fa fa-backward" ></i></a>
			<button onclick="myFunction()" ><i class="fa fa-print" ></i></button>
	</div>
	<div id = 'uu'><p></p>
		<img src = 'images/images/uoglogo.png' width = '40'>
		<h3>University of Gondar</h3>
		<h4>Department of <?php echo strtolower($_POST['department']); ?></h4>
		
		<?php echo '<h4>'.$_POST['year'].' '.$_POST['sechedule'].'</h4>'; ?>
	</div>
<?php
if(isset($_POST['view'])){
	include 'displayschedule.php';
	$sec = $_POST['sechedule'];
	if($sec == 'Exam  Schedule'){
		$classroom2 = new viewschedule();
		$view = $classroom2->viewexamschdule();				
	}
	if($sec == 'ClassRoom Schedule'){
		$classroom3 = new viewschedule();
		$view = $classroom3->viewclassroomschedule();				
	}
	if($sec == 'Makeup Services'){
		$classroom2 = new viewschedule();
		$view = $classroom2->viewmakeup();				
	}
}
?>
	<div id = 'dd'>
			<a href = 'viewschedule.php'><i class="fa fa-backward" ></i></a>
			<button onclick="myFunction()" ><i class="fa fa-print" ></i></button>
	</div>
</div>