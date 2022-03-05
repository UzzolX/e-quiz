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
				<span>Courses</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- search section -->
	<section class="search-section">
		<div class="container">
			<div class="search-warp">
				<div class="section-title text-white">
					<h2>Search your course</h2>
				</div>
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<!-- search form -->
						<form class="course-search-form">
							<select class="mdb-select md-form ">
								<option value="" disabled selected>Choose your Course</option>
								<option value="1">Art & Crafts</option>
								<option value="2">IT Development</option>
								<option value="3">Graphic Design</option>
								<option value="4">Web Development</option>
								<option value="5">Android</option>
								<option value="6">Software</option>
								<option value="7">Management</option>
								<option value="8">Android</option>
								<option value="9">Software</option>
							  </select>
							  <select class="mdb-select md-form">
								<option value="" disabled selected>Tutorial/Quiz</option>
								<option value="1">Tutorials</option>
								<option value="2">Quiz</option>
							  </select>
							<button class="site-btn">Search</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- search section end -->


	<!-- course section -->
	<section class="course-section spad pb-0">
		<div class="course-warp">
			{{-- <ul class="course-filter controls">
				<li class="control active" data-filter="all">All</li>
				<li class="control" data-filter=".finance">Finance</li>
				<li class="control" data-filter=".design">Design</li>
				<li class="control" data-filter=".web">Web Development</li>
				<li class="control" data-filter=".photo">Photography</li>
			</ul>                                        --}}
			<div class="row course-items-area">
				<!-- course -->

				@foreach ($course as $course)
				<div class="mix col-lg-3 col-md-4 col-sm-6 design">
					<div class="course-item">
						<div class="course-thumb set-bg" data-setbg="{{asset('frontend-assets/assets/img/courses/1.jpg')}}">
						</div>
						<div class="course-info">
							<div class="course-text">
								<a href="{{route('singleCourse',[$course->id,$course->slug])}}">
									<h5>{{ $course->title }}</h5>
									<p>{{ $course->description }}</p>
								</a>
							</div>
							<div class="course-author">
								<div class="ca-pic set-bg" data-setbg="{{asset('frontend-assets/assets/img/authors/1.jpg')}}"></div>
								<p>William Parker, <span>Developer</span></p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="featured-courses">
				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="{{asset('frontend-assets/assets/img/courses/f-1.jpg')}}">
					</div>
					<div class="row">
						<div class="col-lg-6 offset-lg-6 pl-0">
							<div class="course-info">
								<div class="course-text">
									<div class="fet-note">Featured Course</div>
									<a href="single-course.html">
										<h5>HTNL5 & CSS For Begginers</h5>
									</a>
									<p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna</p>
								</div>
								<div class="course-author">
									<div class="ca-pic set-bg" data-setbg="{{asset('frontend-assets/assets/img/authors/1.jpg')}}"></div>
									<p>William Parker, <span>Developer</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="featured-course course-item">
					<div class="course-thumb set-bg" data-setbg="{{asset('frontend-assets/assets/img/courses/f-2.jpg')}}">
					</div>
					<div class="row">
						<div class="col-lg-6 pr-0">
							<div class="course-info">
								<div class="course-text">
									<div class="fet-note">Featured Course</div>
									<a href="single-course.html">
										<h5>HTNL5 & CSS For Begginers</h5>
									</a>
									<p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna</p>
								</div>
								<div class="course-author">
									<div class="ca-pic set-bg" data-setbg="{{asset('frontend-assets/assets/img/authors/2.jpg')}}"></div>
									<p>William Parker, <span>Developer</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- course section end -->


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