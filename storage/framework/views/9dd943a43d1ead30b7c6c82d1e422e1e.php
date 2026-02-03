<?php $__env->startSection('content'); ?>

			
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Products</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				Our Case
			============================================== 
			-->
			<div class="our-case our-project section-spacing">
				<div class="container">
					<div class="wrapper">
						<div class="row">
							<?php $__currentLoopData = products_get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-case-block">
									<img src="/upload/producs/<?php echo e($product->image); ?>" alt="" style="width: 400px;height: 400px;">
									<div class="hover-content">
										<div class="text clearfix">
											<div class="float-left">
												<h5><a href="project-details.html"><?php echo e($product->p_name); ?></a></h5>
												<p><?php echo e($product->p_description); ?></p>
											</div>
											<a href="<?php echo e(route('w-product-details', $product->id)); ?>" class="details float-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
										</div> <!-- /.text -->
									</div> <!-- /.hover-content -->
								</div> <!-- /.single-case-block -->
							</div> <!-- /.col- -->
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
					<!-- <div class="theme-pagination text-center">
						<ul>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
				</div> <!-- /.container -->
			</div> <!-- /.our-case -->
			
			<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/szlbpmtgkfdj/public_html/resources/views/website/product.blade.php ENDPATH**/ ?>