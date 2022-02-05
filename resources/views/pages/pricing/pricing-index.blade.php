<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catch Your Dream</title>

    @include('partials.head')

</head>

<body>

    <!-- header section starts  -->
    @include('partials.nav')
    <!-- header section ends -->


    <!-- home section starts  -->
    <section class="about pad-top" id="home">

        <div class="row">

            <div class="content">
                <h3>Let professionals run your event!</h3>
                <p>We take the time to really get to know you and your preferences and find the best places and
                    activities for you. With lots of creativity, sensibility and know how, we design brilliant events.
                    We conceptualize and coordinate your event from beginning to end - professionally and individually
                    with your personal touch.</p>
                <p>
                    And we offer a reasonalble pricing for that. Check out our packages below.
                </p>
                
            </div>

            <div class="image">
                <img src="{{asset('frontend-assets/assets/images/pricing.jpg')}}" alt="">
            </div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- price section starts  -->

    <section class="price" id="price">

        <h1 class="heading"> our <span>price</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">for birthdays</h3>
                <h3 class="amount">$250.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for weddings</h3>
                <h3 class="amount">$450.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for concerts</h3>
                <h3 class="amount">$650.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for others</h3>
                <h3 class="amount">$850.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

        </div>


    </section>

    <!-- price section ends -->


    <!-- footer section starts  -->

    @include('partials.footer')

    <!-- footer section ends -->

    <!-- theme toggler  -->

    <div class="theme-toggler">

        <div class="toggle-btn">
            <i class="fas fa-cog"></i>
        </div>

        <h3>choose color</h3>

        <div class="buttons">
            <div class="theme-btn" style="background: #3867d6;"></div>
            <div class="theme-btn" style="background: #f7b731;"></div>
            <div class="theme-btn" style="background: #ff0033;"></div>
            <div class="theme-btn" style="background: #20bf6b;"></div>
            <div class="theme-btn" style="background: #fa8231;"></div>
            <div class="theme-btn" style="background: #FC427B;"></div>
        </div>

    </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="{{asset('frontend-assets/assets/js/script.js')}}"></script>

</body>

</html>
