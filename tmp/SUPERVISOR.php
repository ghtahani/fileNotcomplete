<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>تدريبكم </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
	
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 	https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

  	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  	<link rel="shortcut icon" href="favicon.ico">

  	<!-- Google Webfont -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Easy Responsive Tabs -->
	<link rel="stylesheet" href="css/easy-responsive-tabs.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="inner-page">
		
		<!-- START #fh5co-header -->
		<header id="fh5co-header-section" role="header" class="" >
			<div class="container">

				

				<!-- <div id="fh5co-menu-logo"> -->
					<!-- START #fh5co-logo -->
					<h1 id="fh5co-logo" class="pull-left"><a href="index.html"><img src="images/logo.png" alt="Slant Free HTML5 Template"></a></h1>
					
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						
						
						<ul class="sf-menu" id="fh5co-primary-menu">
							
							<li>
								<a href="#"> عن الموقع </a>
							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">مساعدة</a>
								 <!--<ul class="fh5co-sub-menu">
								 	<li><a href="left-sidebar.html">Left Sidebar</a></li>
								 	<li><a href="right-sidebar.html">Right Sidebar</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">Free HTML5</a>
										<ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
											<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
											<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
											<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
											<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
										</ul>
									</li>-->
							<li>
								<a href="index.html">الصفحة الرئيسية</a>
							</li>		 
								</ul>
							</li>
						<!--	<li><a href="elements.html">Elements</a></li>--
							<li class="fh5co-special"><a href="contact.html">Get started</a></li>
						</ul>
					</nav>
				<!-- </div> -->

			</div>
		</header>
		
		
		<div id="fh5co-hero">
			<a href="#fh5co-main" class="smoothscroll fh5co-arrow to-animate hero-animate-4"><i class="ti-angle-down"></i></a>
			<!-- End fh5co-arrow -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
					<div class="fh5co-hero-wrap">
						<div class="fh5co-hero-intro">
							<h1 class="to-animate hero-animate-1">مرحبا</h1>
							<!--<h2 class="to-animate hero-animate-2">مرحبا .....</h2>-->
							<br/>
							<br/>
							
							<table class="table table-striped">
									
									<thead>

										<tr>

											<th style="float: right;">الايميل</th>

											
										</tr>

									</thead>

									<tbody>
									<?php 
										include ("vvv.php");
										$x = new config();
										$db=$x->connect();
										$statment = $db->prepare("SELECT supEmail, OfficeNO FROM supervisor where SuperID='1'");
										$statment->execute();
										$result =$statment->fetchAll();
										foreach ($result as $results){
										//for($i=0; $row = $result->fetch(); $i++){
										echo $row['supEmail'];
										echo $row['OfficeNO'];
											}
										
									?>
									
										<tr>
											<td style="color:#94CDDE;"></td>

										</tr>
									<thead>
										<tr>
										<th style="float: right;">رقم المكتب</th>
										</tr>
									</thead>	
										<tr>
											<td style="color:#94CDDE;">5687</td>
										</tr>
									</tbody>
									
								</table>
									<a href="EDITSUPERVISOR.HTML" class="btn btn-outline btn-lg">تحديث</a>
									
						</div>
					</div>
				</div>
			</div>		
		</div>

		<div id="fh5co-main">
			<div class="container">
				
					
<table class="table">
    <thead>
        <tr>
            
            <th>رسالة</th>
            <th>ملف الطالب </th>
            <th>الاسم الاخير</th>
            <th>اسم المستخدم</th>
            <th>الاسم الاول</th>
        </tr>
    </thead>
    <tbody>
		
        <tr>
            
            <td>
			<!--<form method="post" action="massage.php" id="my_form"> </form>
			 <input type="text" name="company" form="my_form" />
               <!-- <fieldset class="form-group">
                    <input type="checkbox" id="checkbox1">
                    <label for="checkbox1"></label>
				
                </fieldset>-->
				<form method="post" action="massage.php">
				<input type="text" name="msg">
				<input type="submit" name="youraction" value="save">
				</form>
            </td>
			<!--<td><button type="button" form="my_form">ok</button></td>-->
			
            <td>Ashley</td>
            <td>Lynwood</td>
            <td>@ashow</td>
            <td>
                
            </td>
        </tr>
        <tr>
            
            <td>
                <fieldset class="form-group">
                    <input type="checkbox" id="checkbox2">
                    <label for="checkbox2"></label>
                </fieldset>
            </td>
            <td>Billy</td>
            <td>Cullen</td>
            <td>@cullby</td>
            <td>
                
            </td>
        </tr>
        <tr>
           
            <td>
                <fieldset class="form-group">
                    <input type="checkbox" id="checkbox3">
                    <label for="checkbox3"></label>
                </fieldset>
            </td>
            <td>Ariel</td>
            <td>Macy</td>
            <td>@arielsea</td>
            <td>
                <a class="blue-text"><i class="fa fa-user"></i></a>
                <a class="teal-text"><i class="fa fa-pencil"></i></a>
                <a class="red-text"><i class="fa fa-times"></i></a>
            </td>
        </tr>

    </tbody>
</table>
<div class="col-md-4 col-md-offset-4 text-center work-box fadeInUp animated">
<a class="btn btn-outline btn-md" href ="#" >عرض الملفات</a>
</div>
					<div class="fh5co-spacer fh5co-spacer-md"></div>	

				</div>
			</div>

		
		</div>
		<!-- END fhtco-main -->


		<footer role="contentinfo" id="fh5co-footer">
			<a href="#" class="fh5co-arrow fh5co-gotop footer-box"><i class="ti-angle-up"></i></a>
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">About us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima delectus dolorem fugit totam, commodi ad.</p>
						<p><a href="#" class="btn btn-outline btn-sm">I'm a button</a></p>

					</div>
					<div class="col-md-4 col-sm-6 footer-box">
						<h3 class="fh5co-footer-heading">Links</h3>
						<ul class="fh5co-footer-links">
							<li><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Our Careers</a></li>
							<li><a href="#">Support &amp; FAQ's</a></li>
							<li><a href="#">Sign up</a></li>
							<li><a href="#">Log in</a></li>
						</ul>
					</div> -->
					<div class="col-md-4 col-sm-12 footer-box">
						<h3 class="fh5co-footer-heading" >تواصل معنا</h3>
						<ul class="fh5co-social-icons">
							
							<li><a href="#"><i class="ti-google"></i></a></li>
							<li><a href="#"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#"><i class="ti-facebook"></i></a></li>	
							<li><a href="#"><i class="ti-instagram"></i></a></li>
							<li><a href="#"><i class="ti-dribbble"></i></a></li>
						</ul>
					</div>
					<div class="col-md-12 footer-box">
						<div class="fh5co-copyright">
						<p>&copy; 2015 Free Slant. All Rights Reserved. <br>Designed by <a href="http://freehtml5.co" target="_blank">FREEHTML5.co</a> Images by: <a href="http://unsplash.com">Unsplash</a> and <a href="http://plmd.me" target="_blank">plmd.me</a></p>
						</div>
					</div>
					
				</div>
				<!-- END row -->
				<div class="fh5co-spacer fh5co-spacer-md"></div>
			</div>
		</footer>
			
			
		<!-- jQuery -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Superfish -->
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.js"></script>
		<!-- Easy Responsive Tabs -->
		<script src="js/easyResponsiveTabs.js"></script>
		<!-- FastClick for Mobile/Tablets -->
		<script src="js/fastclick.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-scroll.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>

		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>
