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
	<div class="page-info-section set-bg" data-setbg="assets/img/page-bg/3.jpg" style="height: 300px;">
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
					<div class="blog-post">
						<assets/img src="assets/img/blog/1.jpg" alt="">
						<h3>How to create the perfect resume</h3>
						<div class="blog-metas">
							<div class="blog-meta author">
								<div class="post-author set-bg" data-setbg="assets/img/authors/1.jpg"></div>
								<a href="#">James Smith</a>
							</div>
							<div class="blog-meta">
								<a href="#">Development</a>
							</div>
							<div class="blog-meta">
								<a href="#">June 12, 2021</a>
							</div>
							<div class="blog-meta">
								<a href="#">2 Comments</a>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. </p>
						<a href="#" class="site-btn readmore">Read More</a>
					</div>
					<!-- blog post -->
					<div class="blog-post">
						<assets/img src="assets/img/blog/2.jpg" alt="">
						<h3>5 Tips to make money from home</h3>
						<div class="blog-metas">
							<div class="blog-meta author">
								<div class="post-author set-bg" data-setbg="assets/img/authors/2.jpg"></div>
								<a href="#">James Smith</a>
							</div>
							<div class="blog-meta">
								<a href="#">Development</a>
							</div>
							<div class="blog-meta">
								<a href="#">June 12, 2021</a>
							</div>
							<div class="blog-meta">
								<a href="#">2 Comments</a>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. </p>
						<a href="#" class="site-btn readmore">Read More</a>
					</div>
					<!-- blog post -->
					<div class="blog-post">
						<assets/img src="assets/img/blog/3.jpg" alt="">
						<h3>Why choose an online course?</h3>
						<div class="blog-metas">
							<div class="blog-meta author">
								<div class="post-author set-bg" data-setbg="assets/img/authors/3.jpg"></div>
								<a href="#">James Smith</a>
							</div>
							<div class="blog-meta">
								<a href="#">Development</a>
							</div>
							<div class="blog-meta">
								<a href="#">June 12, 2021</a>
							</div>
							<div class="blog-meta">
								<a href="#">2 Comments</a>
							</div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. </p>
						<a href="#" class="site-btn readmore">Read More</a>
					</div>
					<div class="site-pagination">
						<span class="active">01.</span>
						<a href="#">02.</a>
						<a href="#">03</a>
					</div>
				</div>
				<div class="col-lg-3 col-md-5 col-sm-9 sidebar">
					<div class="sb-widget-item">
						<form class="search-widget">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="sb-widget-item">
						<h4 class="sb-w-title">Categories</h4>
						<ul>
							<li><a href="#">Developement</a></li>
							<li><a href="#">Social Media</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Events & Lifestyle</a></li>
							<li><a href="#">Uncategorizes</a></li>
						</ul>
					</div>
					<div class="sb-widget-item">
						<h4 class="sb-w-title">Archives</h4>
						<ul>
							<li><a href="#">February 2021</a></li>
							<li><a href="#">March 2021</a></li>
							<li><a href="#">April 2021</a></li>
							<li><a href="#">May 2021</a></li>
							<li><a href="#">June 2021</a></li>
						</ul>
					</div>
					<div class="sb-widget-item">
						<div class="add">
							<a href="#"><assets/img src="assets/img/add.jpg" alt=""></a>
						</div>
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