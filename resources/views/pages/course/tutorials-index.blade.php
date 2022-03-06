<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Quiz</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@include('partials.head')


</head>

<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header-->
	@include('partials.nav')
	<!-- Header  end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="{{asset('frontend-assets/assets/img/page-bg/1.jpg')}}" style="height: 300px;">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="index.html">Home</a>
				<a href="courses.html">Courses</a>
				<span>Tutorial</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->



	<!--tutorials section start-->
	<section class="tutorial-page spad pb-0">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 sidebar">
					<div class="sb-widget-item">
						<h4 class="sb-w-title">Tutorials</h4>
						{{-- <ul>
							<li><a href="#">Pre course servay</a></li>
							<li><a href="#">Getting Start</a></li>
							<li><a href="#">Materials</a></li>
							<li><a href="#">Introduction</a></li>
							<li><a href="#">Section: A</a></li>
							<li><a href="#">Section: B</a></li>
							<li><a href="#">Section: C</a></li>
							<li><a href="#">Section: D</a></li>
							<li><a href="#">Section: E</a></li>
						</ul> --}}
					</div>
					
				{{-- <div class="sb-widget-item">
					<div class="add">
						<a href="#"><i class="fas fa-plus-circle"></i></a>
					</div>
				</div> --}}
				</div>
				<div class="col-xl-9 tutorials-content">
					<div class="tutorials-inner">
						@foreach ($courseMetrials as $k =>  $metrial)
						<div class="single-tutorials">
							<iframe width="150" height="150" src="https://www.youtube.com/embed/{{ $metrial->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<h5>Video {{ ++$k }}</h5>
							<p>{{ $metrial->topic }}</p>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--tutorials section end-->

	@include('partials.footer')
</body>
</html>