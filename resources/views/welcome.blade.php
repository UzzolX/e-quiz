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


    <!-- Hero  -->
    @include('partials.hero')
    <!-- Hero  end -->


    <!-- categories section -->
    <section class="categories-section spad">
        <div class="container">
            <div class="section-title">
                <h2>Our Course Categories</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris
                    scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
            </div>
            <div class="row">
                <!-- categorie -->
                @foreach ($categories as $category)
                <div class="col-lg-4 col-md-6">
                    <a href="course-list.html">
                        <div class="categorie-item">
                            <div class="ci-thumb set-bg" data-setbg="{{ URL::to('/') }}/images/category/{{ $category->image }}"></div>
                            <div class="ci-text">
                                <h5>{{$category->title}}</h5>
                                <p>{{$category->content}}</p>
                                {{-- <span>120 Courses</span> --}}
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- categories section end -->


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



    <!-- community section -->
    <section class="community -section spad">
        <div class="container">
            <div class="section-title mb-0 pb-2">
                <h2>Join Our Community Now!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris
                    scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
            </div>
            <div class="text-center pt-5">
                <a href="#" class="site-btn">Register Now</a>
            </div>
        </div>
    </section>
    <!-- community section end -->


    <!-- footer section -->
    @include('partials.footer')
</body>

</html>
