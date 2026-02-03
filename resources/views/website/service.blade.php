@extends('website.layouts.app')

@section('content')
			<!-- 
			=============================================
				Theme Inner Banner
			============================================== 
			-->
			

			<!-- 
			=============================================
				Our Solution
			============================================== 
			-->
			<div class="our-solution section-spacing">
				<div class="container">
					<div class="theme-title-one">
					<h2 style="margin-top: 100px;">Accelerate your business growth With Our Services</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
						@foreach(services_get() as $service_val)
							<div class="col-lg-4 col-sm-6 col-12">
								<div class="single-solution-block">
								  <img src="/upload/services/{{$service_val->image}}" alt="" class="icon services_blog">
									<h5><a href="">{{$service_val->name}}</a></h5>
								</div> <!-- /.single-solution-block -->
							</div> <!-- /.col- -->
						@endforeach						
						</div> <!-- /.row -->
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.our-solution -->
			

			
			<!-- 
			=============================================
				Feature Banner
			============================================== 
			-->
			<div class="feature-banner section-spacing">
				<div class="opacity">
					<div class="container">
						<h2>From intelligent robots to AI-powered automation, IROBO AI and Robotics is shaping the future with innovative technology and precision engineering.</h2>
						<a href="#" class="theme-button-one">GET A QUOTES</a>
					</div> <!-- /.container -->
				</div> <!-- /.opacity -->
			</div> <!-- /.feature-banner -->


			<!--
			=====================================================
				Free Consultation
			=====================================================
			-->
			<div class="consultation-form section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>FREE CONSULTATION</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> <!-- /.theme-title-one -->
					<div class="clearfix main-content no-gutters row">
						<div class="col-xl-6 col-lg-5 col-12"><div class="img-box"></div></div>
						<div class="col-xl-6 col-lg-7 col-12">
							<div class="form-wrapper">
							<form method="POST" action="{{ route('contact.store.store') }}" enctype="multipart/form-data" class="theme-form-one" autocomplete="off">
							@csrf
									<div class="row">
										<div class="col-md-6"><input type="text" name="name" placeholder="Name *" required></div>
										<div class="col-md-6"><input type="text" name="phone" placeholder="Phone *" required></div>
										<div class="col-md-6"><input type="email" name="email" placeholder="Email *" required></div>
										<div class="col-md-6">
											<select class="form-control" id="exampleSelect1" name="service_name" required>
										      <option value="" readonly>Service you’re looking for</option>
											  @foreach(services_get() as $service)
											  	<option value="{{$service->name}}">{{$service->name}}</option>
											  @endforeach
										    </select>
										</div>
										<div class="col-12"><textarea placeholder="Message" name="message"></textarea></div>
									</div> <!-- /.row -->
									<button  type="submit" class="theme-button-one">GET A QUOTES</button>
								</form>
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->
			</div> <!-- /.consultation-form -->
@endsection