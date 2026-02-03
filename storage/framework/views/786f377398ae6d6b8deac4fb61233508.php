

<?php $__env->startSection('content'); ?>
			
			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			<div id="theme-main-banner" class="banner-one">
				<?php $__currentLoopData = slider_get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div data-src="/upload/slider/<?php echo e($slide->image); ?>">
						<div class="camera_caption">
							<div class="container">
								<p class="wow fadeInUp animated"><?php echo e($slide->title); ?></p>
								<h1 class="wow fadeInUp animated" data-wow-delay="0.2s"><?php echo e($slide->description); ?></h1>
								<a href="<?php echo e(route('w-aboutUs')); ?>" class="theme-button-one wow fadeInUp animated" data-wow-delay="0.39s">ABOUT US</a>
							</div> <!-- /.container -->
						</div> <!-- /.camera_caption -->
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div> <!-- /#theme-main-banner -->
			
			
			<!-- 
			=============================================
				CallOut Banner 
			============================================== 
			-->
			<div class="callout-banner section-spacing">
				<div class="container clearfix">
					<h3 class="title">Mission Statement</h3>
					<p>Our mission is to advance the field of AI and robotics through innovative research, comprehensive training programs, and collaborative development initiatives. We aim to empower individuals and organizations with the skills and knowledge needed to harness the full potential of AI and robotics.</p>
					<a href="<?php echo e(route('w-contactUs')); ?>" class="theme-button-one">Contact Us</a>
				</div>
			</div> <!-- /.callout-banner -->


			<!-- 
			=============================================
				Our Solution
			============================================== 
			-->
			<div class="our-solution section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Research Initiatives</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-solution-block">
									<!-- <img src="/assets/website/images/icon/5.png" alt="" class="icon"> -->
									<h5><a href="#">AI in Robotics</a></h5>
									<p>Explore how AI is transforming robotics with applications in machine learning, computer vision, and natural language processing.</p>
								</div> <!-- /.single-solution-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-solution-block">
									<!-- <img src="/assets/website/images/icon/6.png" alt="" class="icon"> -->
									<h5><a href="#">Robotics and Ethics</a></h5>
									<p>Investigate the ethical implications of AI-driven robotics and develop frameworks for responsible AI deployment.</p>
								</div> <!-- /.single-solution-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-solution-block">
									<!-- <img src="/assets/website/images/icon/7.png" alt="" class="icon"> -->
									<h5><a href="#">Collaborative Robots (Cobots)</a></h5>
									<p>Research on integrating AI with cobots for enhanced safety and efficiency in industrial settings </p>
								</div> <!-- /.single-solution-block -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-solution -->


			<!-- 
			=============================================
				About Company Stye Two
			============================================== 
			-->
			<div class="about-compnay-two section-spacing">
				<div class="overlay">
					<div class="container">
						<div class="row no-gutters">
							<div class="col-lg-7 col-12 text">
								<div class="theme-title-one">
									<h2>Research Initiatives</h2>
								</div> <!-- /.theme-title-one -->
								<p>AI research and development (R&D) is transforming industries and societies by enhancing efficiency, innovation, and decision-making processes. Here's a comprehensive overview of AI R&D:</p>
								<!-- <p>You would see the biggest gift would be from me and the card attached would so thank you for being a friend the biggest gift.</p> -->
								<img src="<?php echo e(asset('/assets/website/images/home/sign.png')); ?>" alt="" class="sign">
							</div> <!-- /.col- -->
							<div class="col-lg-5 col-12">
								<div class="quote-form">
									<form action="#" class="theme-form-one">
										<div class="row">
											<div class="col-md-6"><input type="text" name="name" placeholder="Name *" required></div>
											<div class="col-md-6"><input type="text" name="phone" placeholder="Phone *" required></div>
											<div class="col-md-6"><input type="email" name="email" placeholder="Email *" required></div>
											<div class="col-md-6">
												<select class="form-control" name="service_name" id="exampleSelect1" required>
											      <option value="" readonly>Choose Services?</option>
													<?php $__currentLoopData = services_get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<option value="<?php echo e($service->name); ?>"><?php echo e($service->name); ?></option>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											    </select>
											</div>
											<div class="col-12"><textarea name="message" placeholder="Message"></textarea></div>
										</div> <!-- /.row -->
										<button class="theme-button-one">GET A QUOTES</button>
									</form>
								</div> <!-- /.quote-form -->
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.about-compnay-two -->


			<!-- 
			=============================================
				Our Case
			============================================== 
			-->
			
			<!-- /.our-case -->


			

			<!--
			=====================================================
				Faq Section
			=====================================================
			-->
			<div class="faq-section">
				<div class="overlay">
					<div class="container">
						<div class="theme-title-one">
							<h2>Strategic Priorities in AI R&D</h2>
							<p>The National AI R&D Strategic Plan outlines key priorities</p>
						</div> <!-- /.theme-title-one -->

						<div class="wrapper row no-gutters">
							<div class="col-xl-6 col-lg-7 order-last">
								<div class="faq-content">
									<div class="accordion-one">
										<div class="panel-group theme-accordion" id="accordion">
										  <div class="panel">
										    <div class="panel-heading">
										      <h6 class="panel-title">
										        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
										        1. Fundamental Research</a>
										      </h6>
										    </div>
										    <div id="collapse1" class="panel-collapse collapse">
										      <div class="panel-body">
										      	<p>Investing in basic AI research to ensure long-term advancements.</p>
										      </div>
										    </div>
										  </div> <!-- /panel 1 -->
										  <div class="panel">
										    <div class="panel-heading active-panel">
										      <h6 class="panel-title">
										        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
										        2. Human-AI Collaboration</a>
										      </h6>
										    </div>
										    <div id="collapse2" class="panel-collapse collapse show">
										      <div class="panel-body">
										      	<p>Developing effective methods for humans and AI systems to work together.</p>
										      </div>
										    </div>
										  </div> <!-- /panel 2 -->
										  <div class="panel">
										    <div class="panel-heading">
										      <h6 class="panel-title">
										        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
										        3. Ethical Considerations</a>
										      </h6>
										    </div>
										    <div id="collapse3" class="panel-collapse collapse">
										      <div class="panel-body">
										      	<p>Addressing ethical, legal, and societal implications of AI.</p>
										      </div>
										    </div>
										  </div> <!-- /panel 3 -->
										  <div class="panel">
										    <div class="panel-heading">
										      <h6 class="panel-title">
										        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
										       4. Safety and Security</a>
										      </h6>
										    </div>
										    <div id="collapse4" class="panel-collapse collapse">
										      <div class="panel-body">
										      	<p>Ensuring AI systems are safe and secure.</p>
										      </div>
										    </div>
										  </div> <!-- /panel 4 -->
										  <div class="panel">
										    <div class="panel-heading">
										      <h6 class="panel-title">
										        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
										       5. International Collaboration</a>
										      </h6>
										    </div>
										    <div id="collapse5" class="panel-collapse collapse">
										      <div class="panel-body">
										      	<p>Establishing coordinated international AI research efforts.</p>
										      </div>
										    </div>
										  </div> <!-- /panel 5 -->
										</div> <!-- end #accordion -->
									</div> <!-- End of .accordion-one -->
								</div> <!-- /.faq-content -->
							</div> <!-- /.col- -->
							<div class="col-xl-6 col-lg-5 order-first"><div class="img-box"><a data-fancybox href="https://www.youtube.com/embed/r-AuLm7S3XE?rel=0&amp;amshowinfo=0" class="play"><i class="fa fa-play" aria-hidden="true"></i></a></div></div>
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.faq-section -->


			<!--
			=====================================================
				Why Choose us
			=====================================================
			-->
			<div class="why-choose-us section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Development Opportunities</h2>
					</div> <!-- /.theme-title-one -->

					<div class="wrapper">
						<div class="row">
							<div class="col-lg-4 col-12">
								<div class="single-block">
									<!-- <i class="icon flaticon-puzzle"></i> -->
									<h5><a href="#">Robotics Lab Setup</a></h5>
									<p>Partner with us to establish state-of-the-art robotics labs for schools, colleges, and corporations.</p>
								</div> <!-- /.single-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-12">
								<div class="single-block">
									<!-- <i class="icon flaticon-presentation"></i> -->
									<h5><a href="#">AI-Driven Robotics Projects</a></h5>
									<p>Participate in cutting-edge projects integrating AI with robotics for real-world applications.</p>
								</div> <!-- /.single-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-12">
								<div class="single-block">
									<!-- <i class="icon flaticon-people"></i> -->
									<h5><a href="#">Franchise Opportunities</a></h5>
									<p>Join our network of robotics education franchises to empower the next generation of innovators.</p>
								</div> <!-- /.single-block -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.why-choose-us -->


			<!--
			=====================================================
				Short Banner
			=====================================================
			-->
			<div class="short-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Challenges and Future Directions</h2>
						<p style="color: #000000;">Despite its potential, AI-driven R&D faces challenges such as data privacy, ethical frameworks, and accuracy issues. Researchers are working to address these challenges while leveraging AI to accelerate innovation and reduce errors in R&D processes.</p>
					</div>
				</div> <!-- /.overlay -->
			</div> <!-- /.short-banner -->

			<div class="our-blog latest-news section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Role of AI in Automating R&D</h2>
						<p>AI itself can automate parts of AI R&D, using techniques like advancing agents to drive progress in AI research. This automation can further accelerate the development of AI technologies.
						In summary, AI R&D is a rapidly evolving field that is transforming industries and governments by enhancing innovation, efficiency, and collaboration. However, it also presents challenges that require careful management to ensure ethical and responsible development. </p>
					</div> <!-- /.theme-title-one -->

				</div> <!-- /.container -->
			</div> <!-- /.our-blog -->

			<div class="why-we-best">
				<div class="overlay">
					<div class="container">
						<div class="theme-title-one">
							<h2>Resources and Community</h2>
							<!-- <p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p> -->
						</div> <!-- /.theme-title-one -->

						<div class="wrapper row no-gutters">
							<div class="col-lg-6 col-12 order-lg-last"><div class="img-box"></div></div>
							<div class="col-lg-6 col-12 order-lg-first">
								<ul class="best-list-item">
									<li>
										<i class="icon flaticon-puzzle"></i>
										<h5><a href="#">Blog</a></h5>
										<p>Stay updated with the latest trends and breakthroughs in AI and robotics</p>
									</li>
									<li>
										<i class="icon flaticon-presentation"></i>
										<h5><a href="#">Webinars</a></h5>
										<p>Engage with industry experts through regular webinars and workshops.</p>
									</li>
									<li>
										<i class="icon flaticon-people"></i>
										<h5><a href="#">Community Forum</a></h5>
										<p>Connect with peers and professionals to share knowledge and collaborate on projects.</p>
									</li>
								</ul>
							</div> <!-- /.col- -->
						</div> <!-- /.wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.why-we-best -->


			<!--
			=====================================================
				Why Choose us
			=====================================================
			-->
			<div class="why-choose-us section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Key Research Areas</h2>
					</div> <!-- /.theme-title-one -->

					<div class="wrapper">
						<div class="row">
							<div class="col-lg-4 col-12">
								<div class="single-block">
									<!-- <i class="icon flaticon-puzzle"></i> -->
									<h5><a href="#">Machine Learning and Deep Learning</a></h5>
									<p>Explore our work in developing cutting-edge machine learning models and deep learning techniques for various applications.</p>
								</div> <!-- /.single-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-12">
								<div class="single-block">
									<!-- <i class="icon flaticon-presentation"></i> -->
									<h5><a href="#">Natural Language Processing (NLP)</a></h5>
									<p>Discover how we're pushing the boundaries of NLP to enhance human-computer interactions.</p>
								</div> <!-- /.single-block -->
							</div> <!-- /.col- -->
							<div class="col-lg-4 col-12">
								<div class="single-block">
									<!-- <i class="icon flaticon-people"></i> -->
									<h5><a href="#">Computer Vision</a></h5>
									<p>Learn about our projects in image recognition and processing, enabling intelligent systems to interpret visual data.</p>
								</div> <!-- /.single-block -->
							</div> <!-- /.col- -->
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.why-choose-us -->


			<!--
			=====================================================
				Latest News
			=====================================================
			-->
			


			<!--
			=====================================================
				Google Map
			=====================================================
			-->
			<!-- Google Map -->
			<div class="google-map-one" style="display: none;"><div class="map-canvas"></div></div>
			
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\anish\Downloads\app\resources\views/website/home.blade.php ENDPATH**/ ?>