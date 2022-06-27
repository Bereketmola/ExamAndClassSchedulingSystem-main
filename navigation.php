<?php ?>

<script src="../sweetalert/sweetalert.min.js"></script>
<script src="../sweetalert/sweetalert-devmin.js"></script>
<link rel="stylesheet" href="../sweetalert/sweetalert.css">
	<div class="header_bg">
		<div class="wrap">
			<div id="content">
				<div id='systemlogo'><img src="images/images/kas.jpg"></div>
		      <header id="topnav">
		        <nav>
		        		 <ul>
							<li ><a href="index.php" id = 'index' >Home</a></li>
							<li><a href="services.php" id = 'service'>Services</a></li>
							<li><a href="viewschedule.php" id = 'view'>ViewSchedule</a></li>
							<li><a class="popup-with-zoom-anim" href="loginpage.php">LogIn</a><li>
						</ul>
		        </nav>   

		        <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
				<script>
					$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
					});
				});



  function error()
  {
   swal({
    title: "",
    text: "Chenge your password for more security perpose",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Chenge",
    cancelButtonText: "Don't Chenge",
    closeOnConfirm: false,
    animation: "slide-from-top"
  },
  function(isConfirm){
    if (isConfirm) {
      window.location = "chengeaccount.php";
    } 
  });
  }
				</script>
		      </header><!-- @end #topnav -->
		      <script type="text/javascript"  src="js/menu.js"></script>
		    </div>
		</div>
	</div>
								 <div id="login" class="mfp-hide">
									<div class="pop_up">
									 	<div class="popform">
											<form action="" method='POST' id='form'>
												<h4><span class="poping"> </span>Log In</h4>
												<ul>
													<li><input type="text" name="username" placeholder='User Name' required></li>
													<li><input type="password" name="password" placeholder='Password' required></li>
													<li>
														<?php 
													   include_once "login.php";
													   if(isset($_POST['submit'])){ 
														   if(!empty($_POST['password'])&&!empty($_POST['username'])){
															   $check = new user();
															   $login = $check->check_login();
															}
														}
													?>

													</li>
												</ul>
												<ul class="sendbtn">
													<li><input type="submit" value="Submit" name='submit'></li>
													<li><input type="submit" value="Cancel" name='cancel'></li>
												</ul>
											</form>
										</div>
						  			</div>
								</div>
	<?php ?>