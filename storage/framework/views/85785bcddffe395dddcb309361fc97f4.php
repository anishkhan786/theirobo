<?php $__env->startSection('content'); ?>
			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Projects Details</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				Project Details
			============================================== 
			-->
			<div class="project-details section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-5 col-md-6 col-12 project-details-sidebar order-md-last">
							<div class="strategies">
								<h3 class="main-title"><?php echo e($product->p_name); ?></h3>
								<p><?php echo e($product->p_description); ?></p>
								<ul class="project-history clearfix">
									
									<li>
										<h6>Date :</h6>
										<span><?php echo e($product->created_at); ?></span>
									</li>
									<!-- <li>
										<h6>Budget :</h6>
										<span>...</span>
									</li> -->
									
								</ul>
								<h6>Share us on :</h6>
								<ul class="social-icon">
								<li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://x.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a target="_blank" href="https://www.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>

							<!-- <div class="charts">
								<h3 class="main-title">Improvement Charts</h3>
								<p>The man has gone before you would see the biggest gift would be from me and the card attached.</p>
								<div id="chartContainer"></div>
							</div>  -->
							<!-- /.charts -->
						</div> <!-- /.project-details-sidebar -->
						<div class="col-xl-8 col-lg-7 col-md-6 col-12 order-md-first image-col">
							<img src="/upload/producs/<?php echo e($product->image); ?>" alt="">
							<?php $__currentLoopData = products_images_get($product->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<img src="/upload/producs/<?php echo e($pro->image); ?>" alt="">
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.project-details -->


			<!--
			=====================================================
				Testimonial Slider
			=====================================================
			-->
			<!-- <div class="testimonial-section">
				<div class="overlay">
					<div class="container">
						<div class="wrapper">
							<div class="bg">
								<div class="testimonial-slider">
									<div class="item">
										<p>“ A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ”</p>
										<div class="name">
											<h6>Shawn Michael</h6>
											<span>Founder, Mnc Inc.</span>
										</div> 
									</div> 
									<div class="item">
										<p>“ A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ”</p>
										<div class="name">
											<h6>Rashed Ka.</h6>
											<span>Founder, Mnc Inc.</span>
										</div> 
									</div> 
									<div class="item">
										<p>“ A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government they survive as soldiers of fortune to a deluxe apartment in the sky moving on up to the east side a family. ”</p>
										<div class="name">
											<h6>Mahfuz Riad</h6>
											<span>Founder, Mnc Inc.</span>
										</div> 
									</div> 
								</div> 
							</div> 
						</div> 
					</div> 
				</div> 
			</div>  -->
			<!-- /.testimonial-section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/szlbpmtgkfdj/public_html/resources/views/website/product-details.blade.php ENDPATH**/ ?>