<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from html.creativegigstf.com/charles/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2025 05:21:07 GMT -->
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title><?php echo e(website_title()); ?></title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="/upload/website-logo/<?php echo e(website_logo()); ?>">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="/assets/website/css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="/assets/website/css/responsive.css">

		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			

			<!-- 
			=============================================
				Theme Header Two
			============================================== 
			-->
			<header class="header-two">
				<div class="top-header">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-12">
								<ul class="left-widget">
									<li><?php echo e(website_title()); ?></li>
									
								</ul>
							</div>
							<div class="col-md-6 col-sm-4 col-12">
								<ul class="social-icon">
									<li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://x.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<div class="logo float-left">
								<a href="/">
									<img style="max-width: 30%;"src="/upload/website-logo/<?php echo e(website_logo()); ?>" alt="">
								</a>
							</div>
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li class="<?php echo e(Route::currentRouteName() == 'w-home' ? 'active' : ''); ?>"><a href="<?php echo e(route('w-home')); ?>">Home</a></li>
									    <li class="<?php echo e(Route::currentRouteName() == 'w-aboutUs' ? 'active' : ''); ?>"><a href="<?php echo e(route('w-aboutUs')); ?>">About-us</a></li>
									    <li class="<?php echo e(Route::currentRouteName() == 'w-services' ? 'active' : ''); ?>"><a href="<?php echo e(route('w-services')); ?>">Services</a></li>
									    <li class="<?php echo e(Route::currentRouteName() == 'w-products' ? 'active' : ''); ?>"><a href="<?php echo e(route('w-products')); ?>">Products</a></li>
									    <li class="<?php echo e(Route::currentRouteName() == 'w-contactUs' ? 'active' : ''); ?>" ><a href="<?php echo e(route('w-contactUs')); ?>">Contact-Us</a></li>
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-two -->


            <?php echo $__env->yieldContent('content'); ?>

           
			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="theme-footer-two">
				<div class="top-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-sm-6 col-12 logo-widget">
								<div class="logo"><a href="index.html"><img style="" src="images/logo/logo.png" alt=""></a></div>
								<p><?php echo e(webiste_description()); ?></p>
								<ul class="social-icon">
									<li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://x.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div> <!-- /.logo-widget -->
							<div class="col-lg-3 col-sm-6 col-12 footer-list">
								<h6 class="title">EXPLORE</h6>
								<ul>
									<li><a href="<?php echo e(route('w-aboutUs')); ?>">About us</a></li>
									<li><a href="<?php echo e(route('w-services')); ?>">Services</a></li>
									<li><a href="<?php echo e(route('w-products')); ?>">Products</a></li>
									<li><a href="<?php echo e(route('w-contactUs')); ?>">Contact us</a></li>
								</ul>
							</div> <!-- /.footer-list -->
							
							<div class="col-lg-4 col-sm-6 col-12 contact-widget">
								<h6 class="title">CONTACT</h6>
								<ul>
									<li>
									<i class="icon flaticon-placeholder"></i>
										<?php echo e(webiste_address()); ?> 
									</li>
									<li>
										<i class="flaticon-multimedia-1"></i>
										<a ><?php echo e(support_email()); ?> </a>
									</li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<a ><?php echo e(website_contact_no()); ?> </a>
									</li>
								</ul>
							</div> <!-- /.contact-widget -->
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-footer -->
				<div class="bottom-footer">
					<div class="container">
						<p>&copy; Irobo Copyrights 2025. All Rights Reserved.</p>
					</div>
				</div> <!-- /.bottom-footer -->
			</footer> <!-- /.theme-footer-two -->
			

	        

	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s">
				<i class="fa fa-angle-up" aria-hidden="true"></i>
			</button>
			


		<!-- Optional JavaScript _____________________________  -->

    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    	<!-- jQuery -->
		<script src="/assets/website/vendor/jquery.2.2.3.min.js"></script>
		<!-- Popper js -->
		<script src="/assets/website/vendor/popper.js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="/assets/website/vendor/bootstrap/js/bootstrap.min.js"></script>
		<!-- Camera Slider -->
		<script src='/assets/website/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
	    <script src='/assets/website/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script> 
	    <script src='/assets/website/vendor/Camera-master/scripts/camera.min.js'></script>
	    <!-- menu  -->
		<script src="/assets/website/vendor/menu/src/js/jquery.slimmenu.js"></script>
		<!-- WOW js -->
		<script src="/assets/website/vendor/WOW-master/dist/wow.min.js"></script>
		<!-- owl.carousel -->
		<script src="/assets/website/vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script src="/assets/website/vendor/jquery.appear.js"></script>
		<script src="/assets/website/vendor/jquery.countTo.js"></script>
		<!-- Fancybox -->
		<script src="/assets/website/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
	
		

		<!-- Theme js -->
		<script src="/assets/website/js/theme.js"></script>
	
		</div> <!-- /.main-page-wrapper -->
	</body>

<!-- Mirrored from html.creativegigstf.com/charles/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Feb 2025 05:21:15 GMT -->
</html><?php /**PATH /home/szlbpmtgkfdj/public_html/resources/views/website/layouts/app.blade.php ENDPATH**/ ?>