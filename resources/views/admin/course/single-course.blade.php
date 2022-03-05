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

	<!-- Header section -->
	@include('partials.nav')
	<!-- Header section end -->
	

	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="{{asset('frontend-assets/assets/img/page-bg/1.jpg')}}" style="height: 300px;">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="index.html">Home</a>
				<a href="courses.html">Courses</a>
				<span>IT Development</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->




	<!-- single course section -->
	<section class="single-course spad pb-0">
		<div class="container">
			<div class="course-meta-area">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						{{-- <div class="course-note">Featured Course</div> --}}
						<h3>{{ $course->title }}</h3>
						<div class="course-metas">
							<div class="course-meta">
								<div class="course-author">
									<div class="ca-pic set-bg" data-setbg="assets/img/authors/2.jpg"></div>
									<h6>Teacher</h6>
									<p>William Parker, <span>Developer</span></p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Category</h6>
									<p>Development</p>
								</div>
							</div>
						</div>
						<a href="tutorials.html" class="site-btn ">Tutorial</a>
					</div>
				</div>
			</div>
			<assets/img src="{{asset('frontend-assets/assets/img/courses/single.jpg')}}" alt="" class="course-preview">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 course-list">
					<div class="cl-item">
						<h4>Course Description</h4>
						<p>{{ $course->description }}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- single course section end -->


	{{-- <!-- Page -->
	<section class="realated-courses spad">
		<div class="course-warp">
			<h2 class="rc-title">Realated Courses</h2>
			<div class="rc-slider owl-carousel">
				<!-- course -->
				<div class="course-item">
					<div class="course-thumb set-bg" data-setbg="{{asset('frontend-assets/assets/img/courses/1.jpg')}}">
					</div>
					<div class="course-info">
						<div class="course-text">
							<a href="single-course.html">
								<h5>Art & Crafts</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</a>
						</div>
						<div class="course-author">
							<div class="ca-pic set-bg" data-setbg="assets/img/authors/1.jpg"></div>
							<p>William Parker, <span>Developer</span></p>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="course-item">
					<div class="course-thumb set-bg" data-setbg="assets/img/courses/2.jpg">
					</div>
					<div class="course-info">
						<div class="course-text">
							<a href="single-course.html">
								<h5>IT Development</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								</a>
						</div>
						<div class="course-author">
							<div class="ca-pic set-bg" data-setbg="assets/img/authors/2.jpg"></div>
							<p>William Parker, <span>Developer</span></p>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="course-item">
					<div class="course-thumb set-bg" data-setbg="assets/img/courses/3.jpg">
					</div>
					<div class="course-info">
						<div class="course-text">
							<a href="single-course.html">
								<h5>Graphic Design</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								</a>
						</div>
						<div class="course-author">
							<div class="ca-pic set-bg" data-setbg="assets/img/authors/3.jpg"></div>
							<p>William Parker, <span>Developer</span></p>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="course-item">
					<div class="course-thumb set-bg" data-setbg="assets/img/courses/4.jpg">
					</div>
					<div class="course-info">
						<div class="course-text">
							<a href="single-course.html">
								<h5>IT Development</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								</a>
						</div>
						<div class="course-author">
							<div class="ca-pic set-bg" data-setbg="assets/img/authors/4.jpg"></div>
							<p>William Parker, <span>Developer</span></p>
						</div>
					</div>
				</div>
				<!-- course -->
				<div class="course-item">
					<div class="course-thumb set-bg" data-setbg="assets/img/courses/5.jpg">
					</div>
					<div class="course-info">
						<div class="course-text">
							<a href="single-course.html">
								<h5>IT Development</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
								</a>
						</div>
						<div class="course-author">
							<div class="ca-pic set-bg" data-setbg="assets/img/authors/5.jpg"></div>
							<p>William Parker, <span>Developer</span></p>
						</div>
					</div>
				</div>
				<!-- course -->
			</div>
		</div>
	</section> --}}
	<!-- Page end -->


	<!-- community section -->
	<section class="community -section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Join Our Community Now!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
			</div>
			<div class="text-center pt-5">
				<a href="#" class="site-btn">Register Now</a>
			</div>
		</div>
	</section>
	<!-- community section end -->

	@include('partials.footer')
    
</body>
</html>