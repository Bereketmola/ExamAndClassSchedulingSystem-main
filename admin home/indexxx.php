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
</head>
<body>
<!-- start header -->
<div id='container'>
	<div class="header_bg">
		<div class="wrap">
			<div id="content">
				<div id='systemlogo'><img src="images/images/logoo.jpg"></div>
		      <header id="topnav">
		        <nav>
		        		 <ul>
							<li class="active" ><a class="scroll" href="#home"><i class="fa fa-home"></i> Home</a></li>
							<li><a class="scroll"href="#service">Services</a></li>
							<li><a class="popup-with-zoom-anim" href="#small-dialog7">About Us</a></li>
							<li><a class="scroll" href="#gallery">UOG Gallery</a></li>
							<li><a class="popup-with-zoom-anim" href="#createaccount"><i class="fa fa-user"></i> Create Account</a></li>
							<li><a  class="scroll" href="#form">Contact</a></li>
							<div class="clear"> </div>
						</ul>
		        </nav>
		      </header><!-- @end #topnav -->
		      <script type="text/javascript"  src="js/menu.js"></script>
		    </div>
		</div>
	</div>
<div id='content2'>
	<h1 align='center'>Wellcome to Online Scheduling System</h1>
		<p>This is scheduling system of Gonader University for reqular Student
	       The system will give the following function for user's. It enable</p>
	<ul>
		<li>Departement dean to create schedule for the student.</li>
		<li>Instructor to access schedule of his course and also allows to reserv free class for makeup.</li>
		<li>Student to access schedule information</li>
	</ul>
	<div class="clear"> </div>
	<table><tr><th><div class="button_1" id='gg'>
								<a class="popup-with-zoom-anim" href="#login"><i class="fa fa-unlock"> </i> LOG IN</a>
							</div><th>
	<th><div class="button_1">
								<a class="sliddwon" href="#viewschedule">View Schedule</a>

							</div>

						</tr></table>

</div>
<!------//slide dwon-->
								<div id="viewschedule">
									<div class="pop_up">
									 	<div class="popform">
											<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
												<h4><span class="poping"> </span>Give Your Information</h4>
												
													<input type="text" name="department" placeholder='Department'></li>
													<select name='year'><option value=''>year</option>
														<option value=''>Frist year</option>
														<option value=''>Second year</option>
														<option value=''>Thrid year</option>
													</select>
													<select name='section'><option value=''>Section</option>
														<option value=''>section one</option>
														<option value=''>section two</option>
														<option value=''>section three</option>
													</select>
													<select name='schedule type'><option value=''>Schedule Type</option>
														<option value=''>Class room</option>
														<option value=''>Exam</option>
														<option value=''>Make up</option>
													</select>
												<ul class="sendbtn">
													<div class="button_1">
								<a class="popup-with-zoom-anim" href="#popupschedule">View</a>
							</div>
													<li><input type="reset" value="Cancel"></li>
													<li><input type="button" value="Close" id='back'></li>
												</ul>
											</form>
										</div>
						  			</div>
								</div>
<!------//slide dwon-->
				<script>
					$(document).ready(function() {
						$('#viewschedule').hide();
						$('.sliddwon').click(function() {
							$('#viewschedule').slideDown(1000);
						});
						$('#back').click(function() {
							$('#viewschedule').slideUp(1000);
						});
				});
				</script>
<div  class="sevice" id="service">
	<div class="wrap">
		<div class="service-grids">
			<h3 align='center'><b>System services</b></h3>
						<div class="allimage">
					 		<img src="images/images/icon2.jpg">
					 		<h3>ClassRoom Scheduling</h3>
					 		<p>Scheduler or Department manager will Stores course, Instructor and section information
					 			system genrates schedule table</p>
						</div>
						<div class="allimage">
							 <img src="images/images/exam2.png">
							 <h3>Exam Scheduling</h3>
							 <p>Exam scheduler or Department manager will give time interval for course then system generates exam 
							 	schedule table</p>
						</div>
						<div class="allimage">
							 <img src="images/images/icon3.jpg">
							 <h3>Makeup Services</h3>
							 <p>Intructor will reserv free classroom on online then system send notification to student </p>
						</div>
						<div class="clear"> </div>
						<div class="button_1">
								<a class="popup-with-zoom-anim" href="#login">LOG IN</a>
								</div>

		 </div>
</div>
<!-----------//service//------------>

<!-----------uog gallary-------------->
<div class="uog_galler" id ="gallery">
				<div class="wrap">
					<div class="heading_h">
						<h3><a href="#">UOG Gallarys</a></h3>
					</div>
					<!--start-mfp -->	
				<div id="small-dialog1" class="mfp-hide">
					<div class="pop_up">
							   <img src="images/images/uog.jpg">
							   	 <h2>Lorem ipsum magnaw</h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								 <p class="pop_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								</div>
					
				</div>
				 <div id="small-dialog2" class="mfp-hide">
							   <div class="pop_up2">
							   <img src="images/images/60.jpg">
							   	 <h2>Lorem ipsum </h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								 <p class="pop_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								</div>
				 </div>
				 <div id="small-dialog3" class="mfp-hide">
							   <div class="pop_up3">
							   	<img src="images/images/uoglogo.jpg">
							   	 <h2>Lorem ipsum </h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								 <p class="pop_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								</div>
				 </div>
				 <div id="small-dialog4" class="mfp-hide">
							   <div class="pop_up4">
							   	<img src="images/images/clr4.jpg">
							   	 <h2>Lorem ipsum </h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								 <p class="pop_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								</div>
				 </div>
				 <div id="small-dialog5" class="mfp-hide">
							   <div class="pop_up5">
							   	<img src="images/images/clr9.jpg">
							   	 <h2>Lorem ipsum </h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								 <p class="pop_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								</div>
				 </div>
				 <div id="small-dialog6" class="mfp-hide">
							   <div class="pop_up6">
							   	<img src="images/images/clr6.jpg">
							   	 <h2>Lorem ipsum </h2>
								 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								 <p class="pop_p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
								</div>
				 </div>
				<div id="small-dialog7" class="mfp-hide">
					<table><tr><th colspan=3><h1>Group member particpation </h1></tr>
						<tr><th><div class="pop_up7">						
						<img src="images/images/gerg.jpg"  alt="Image 1"/ width=100 height=100>
						<h3>Gergito Kusse </h3>
						<h4>Project Coordinator</h4>
						<p>Gergito is the project coordinator<p>
					</div>
					<th><div class="pop_up7">
						<img src="images/images/desta.jpg"  alt="Image 1"/ width=100 height=100>
						<h3>Desta Demisashu  </h3>
						<h4>Tarayteta</h4>
						<p>Gergito is the project coordinator<p>
					</div>
					<th><div class="pop_up7">
						<img src="images/images/desta.jpg"  alt="Image 1"/ width=100 height=100>
						<h3>Tesfaye Million</h3>
						<h4>Document Editor</h4>
						<p>Gergito is the project coordinator<p>
					</div>
				</tr>
										<tr><th><div class="pop_up7">						
						<img src="images/images/gerg.jpg"  alt="Image 1"/ width=100 height=100>
						<h3>Dereje Ayalow </h3>
						<h4></h4>
						<p>Gergito is the project coordinator<p>
					</div>
					<th><div class="pop_up7">
						<img src="images/images/desta.jpg"  alt="Image 1"/ width=100 height=100>
						<h3>Hayat Shemisu</h3>
						<h4></h4>
						<p>Gergito is the project coordinator<p>
					</div>
					<th><div class="pop_up7">
						<img src="images/images/desta.jpg"  alt="Image 1"/ width=100 height=100>
						<h3>Kemila Ebrahim/h3>
						<h4></h4>
						<p>Gergito is the project coordinator<p>
					</div>
				</tr>
			</table>
				 </div>

				<!--end-mfp -->	
				<!--start-content-->
			<div class="gallery">
			<div class="container">
				<div id="gallerylist">
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog1">
						<img src="images/images/uog.jpg" alt="Image 1" height=200px;/>
					</a>
				</div>
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog2">
						<img src="images/images/60.jpg"  alt="Image 1" height=200px;/>
					</a>
				</div>
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog3">
						<img src="images/images/uoglogo.jpg"  alt="Image 1" height=200px;/>
			
					</a>
				</div>
				<div class="clear"></div>
			</div>		
			<div id="gallerylist1">
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog4">
						<img src="images/images/clr4.jpg" alt="Image 1" height=200px/>
					</a>
				</div>
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog5">
						<img src="images/images/clr9.jpg"  alt="Image 1" height=200px/>
					
					</a>
				</div>
				<div class="gallerylist-wrapper">				
					<a class="popup-with-zoom-anim" href="#small-dialog6">
						<img src="images/images/clr6.jpg"  alt="Image 1" height=200px/>
					</a>
				</div>
					<div class="clear"> </div>
					<div class="button_1">
								<a class="popup-with-zoom-anim" href="#login">Login</a>
							</div>
			</div>																																					
		</div>
	</div>
	<!--end container -->
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
				</script>
				
		</div>
	</div>
</div>
<!-----------//gallery//----------->
<div class="pop_up_plan" id='pop_up_plan'>
					<div class="wrap">
							<!-----pop-up-grid-->
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
														   $username = $_POST['username'];
														   $password =$_POST['password'];
														   if(!empty($username)&&!empty($password)){
															   $check = new user();
															   $login = $check->check_login($username,$password);
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
								<div id="popupschedule" class="mfp-hide">
									<div class="pop_up">
									 	<div class="popform">
									 			<p>copy code here</p>
									 			<p>This area displayes schedule information for user</p>
									 			<input type="button" value="Close" id='back'>
										</div>
						  			</div>
								</div>
								<div id="createaccount" class="mfp-hide">
									<div class="pop_up">
									 	<div class="popform">
											<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
												<h4><span class="poping"> </span>Create Account</h4>
													<input type="text" name="firstname" placeholder='Frist Name'></li>
													<input type="text" name="lastname" placeholder='Last Name'></li>
													<input type="text" name="id" placeholder='Id number'></li>
													<input type="text" name="username" placeholder='choice User Name'></li>
													<input type="password" name="password1" placeholder='Password'></li>
													<input type="password" name="password2" placeholder='Confirm password'></li>
													<select><option value=''>Faculty</option>
														
													</select>
													<input type="text" name="department" placeholder='Department'></li>
													<select><option value=''>Account Type</option>
														<option value=''>Adminstrator</option>
														<option value=''>Faculty dean</option>
														<option value=''>Deparment dean</option>
														<option value=''>Instructor</option>
													</select>
													<input type="email" name="email" placeholder='Your Email'></li>
													<input type="text" name="phone" placeholder='Phone Number'></li>												<ul class="sendbtn">
													<li><input type="submit" value="Create"></li>
													<li><input type="reset" value="Cancel"></li>
												</ul>
											</form>
										</div>
						  			</div>
								</div>
							</div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
			<!-- Add fancyBox light-box -->
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
		</script>

<!--------start-contact------> 
 <div class="contact" id="contact">
	<div class="wrap">
		<h2>Contact Us</h2>
			<div class="contact-form">
				<div class="para-contact">
					
				 	<div class="social_2 social_3">	
				 		<table><tr id='tr'><td colspan=3><h3>Address</h3></tr>
				 		<tr><th><th>phone<th>Email</tr>
				 		<tr><th>Adminstrator<td>0932782826<th>Email@gmail.com</tr>
				 		<tr><th>Faculty Dean<th>098765321<th>Email2@gmail.com</tr></table>
				 		<img src='images/images/puls.png'>
		 		  </div>
					<div class="clear"> </div>	
				</div>
						<div class="form" id='form'>
				  			<form method="post" action="#">
							    	<input type="text" class="textbox" name='name' placeholder='Name'>
							    	<input type="text" class="textbox" name='Subject' placeholder='subject'>
							    	<input type="text" class="textbox" name='email' placeholder='Email'>
							    	
										<div class="clear"> </div>
								    <div>
								    	<textarea name="message:" placeholder='Message'></textarea>
								    </div>
									<th><div class="button_1">
								<a class="" href='#'>Send New</a>
							</div></tr></table>
								<div class="clear"> </div>
							</form>
						</div>
						<a class="mov-top" href="#home1"> <span> </span></a>
					 <div class="clear"> </div>
				</div>
  			</div>
     </div>
     <!-- scroll_top_btn -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</div>
</body>
</html>		