<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="site-logo">
                    <a href="/">
                        <h3 class="text-white">E-Quiz</h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <a href="login.html" class="site-btn header-btn">Login</a>
                <nav class="main-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('course.index') }}">Courses</a></li>
                        <li><a href="{{ route('blog.index') }}">News</a></li>
                        <li><a href="{{ route('contact.index') }}">Contact</a></li>
                        <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>