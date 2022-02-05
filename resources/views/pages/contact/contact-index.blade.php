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
            <div class="image">
                <img src="{{asset('frontend-assets/assets/images/contact.svg')}}" alt="">
            </div>

        </div>

    </section>
    <!-- home section ends -->

    <!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="{{route('contact.store')}}" method="POST">
        @csrf
        <div class="inputBox">
            <input name="name" type="text" placeholder="name">
            <input name="email" type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input name="phone" type="number" placeholder="number">
            <input name="subject" type="text" placeholder="subject">
        </div>
        <textarea name="message" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<!-- contact section ends -->


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
