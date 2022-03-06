<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Quiz</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.head')

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header  -->
	@include('partials.nav')
	<!-- Header  end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="{{asset('frontend-assets/assets/img/page-bg/4.jpg')}}" style="height: 300px;">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="/">Home</a>
				<span>Contact</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->




	<!-- Page -->
	<section class="contact-page spad pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					@if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
					<div class="contact-form-warp">
						<div class="section-title text-white text-left">
							<h2>Get in Touch</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </p>
						</div>
						<form class="contact-form" action="{{route('contact.store')}}" method="POST">
							@csrf
							<input name="name" type="text" placeholder="Your Name">
							<input name="email" type="text" placeholder="Your E-mail">
							<input name="subject" type="text" placeholder="Subject">
							<textarea name="message" placeholder="Message"></textarea>
							<button class="site-btn">Sent Message</button>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-info-area">
						<div class="section-title text-left p-0">
							<h2>Contact Info</h2>
							<p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendi sse cursus faucibus finibus.</p>
						</div>
						<div class="phone-number">
							<span>Direct Line</span>
							<h2>+8800000000000</h2>
						</div>
						<ul class="contact-list">
							<li>Uposhohor <br>Sylhet, 3100</li>
							<li>017123456789</li>
							<li>yourmail@gmail.com</li>
						</ul>
						<div class="social-links">
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7238.765580206475!2d91.8834936!3d24.8849214!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1633958346217!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- Page end -->


	<!-- community section -->
	<section class="community -section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Join Our Community Now!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="text-center pt-5">
				<a href="{{ route('register') }}" class="site-btn">Register Now</a>
			</div>
		</div>
	</section>
	<!-- community section end -->


	@include('partials.footer')


</body>
</html>