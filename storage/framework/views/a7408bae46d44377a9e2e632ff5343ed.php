<?php $__env->startSection('content'); ?>
			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>GET IN TOUCH</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->



			<!-- 
			=============================================
				Conatct us Section
			============================================== 
			-->
			<div class="contact-us-section section-spacing">
				<div class="container">
					<div class="theme-title-one">
					<div class="px-4" id="alert">
					<?php if($message = session()->has('succes')): ?>
							<div class="alert alert-success alert-dismissible fade show d-flex justify-content-between align-items-sm-center "
								role="alert">
								<p class="text-white mb-0"><?php echo e(session()->get('succes')); ?></p>
							</div>
							<?php else: ?> 
							<?php echo e(isset($success)?$success:''); ?>

						<?php endif; ?>
                    </div>
					</div> <!-- /.theme-title-one -->
					<div class="clearfix main-content no-gutters row">
						<div class="col-lg-5 col-12"><div class="img-box"></div></div>
						<div class="col-lg-7 col-12">
							<div class="form-wrapper">
								<form method="POST" action="<?php echo e(route('contact.store.store')); ?>" enctype="multipart/form-data" class="theme-form-one form-validation" autocomplete="off">
									<?php echo csrf_field(); ?>	
								<div class="row">
										<div class="col-sm-6 col-12"><input type="text" placeholder="Name *" name="name" required></div>
										<div class="col-sm-6 col-12"><input type="text" placeholder="Phone *" name="phone" required></div>
										<div class="col-sm-12 col-12"><input type="email" placeholder="Email *" name="email" required></div>
										
										<div class="col-12"><textarea placeholder="Message" name="message"></textarea></div>
									</div> <!-- /.row -->
									<button  type="submit" class="theme-button-one">SEND MESSAGE</button>
								</form>
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->

				<!--Contact Form Validation Markup -->
				<!-- Contact alert -->
				<div class="alert-wrapper" id="alert-success">
					<div id="success">
						<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
						<div class="wrapper">
			               	<p>Your message was sent successfully.</p>
			             </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			    <div class="alert-wrapper" id="alert-error">
			        <div id="error">
			           	<button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
			           	<div class="wrapper">
			               	<p>Sorry!Something Went Wrong.</p>
			            </div>
			        </div>
			    </div> <!-- End of .alert_wrapper -->
			</div> <!-- /.contact-us-section -->



			<!-- 
			=============================================
				Compnay Branch Address
			============================================== 
			-->
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/szlbpmtgkfdj/public_html/resources/views/website/contact.blade.php ENDPATH**/ ?>