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


	<!-- Header -->
    @include('partials.nav')
	<!-- Header  end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="{{asset('frontend-assets/assets/img/page-bg/3.jpg')}}" style="height: 300px;">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="#">Home</a>
				<span>News</span>
			</div>
		</div>
	</div>
	<!-- Page info end -->



	<!-- Page  -->
	<section class="blog-page spad pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<!-- blog post -->
					@foreach ($blog as $blog)
						
					@endforeach
					<div class="blog-post">
						<img src="{{ URL::to('/') }}/images/blogs/{{ $blog->image }}" alt="">
						<h3>{{ $blog->title }}</h3>
						<div class="blog-metas">
							<div class="blog-meta author">
								<div class="post-author set-bg" data-setbg="{{asset('frontend-assets/assets/img/authors/2.jpg')}}"></div>
								<a href="#">Admin</a>
							</div>
							<div class="blog-meta">
								<a href="#">Development</a>
							</div>
							<div class="blog-meta">
								<a href="#">June 12, 2021</a>
							</div>
						</div>
						<p>{{ $blog->content }}</p>
						<a href="#" class="site-btn readmore">Read More</a>
					</div>
					<div class="site-pagination">
						<span class="active">01.</span>
						<a href="#">02.</a>
						<a href="#">03</a>
					</div>
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
				<a href="#" class="site-btn">Register Now</a>
			</div>
		</div>
	</section>
	<!-- community section end -->
    @include('partials.footer')
</body>
</html>