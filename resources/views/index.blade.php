@extends('layouts.app')
@section('banner')

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        {{-- <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="assets/img/hero-logo.png" alt=""></a> --}}
        <h1 data-aos="zoom-in" style="font-family: tw">JAGGS</h1>
        <h1 class="we" data-aos="fade-up">WE CAN PRINT THE UNIVERSE</h1>
        <h1 class="print" data-aos="fade-up" style="font-family: mr">Printing</h1>
        <a data-aos="fade-up" href="#product" class="btn-get-started scrollto">ORDER NOW</a>
    </div>
</section><!-- End Hero -->
@endsection
@section('content')


<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>About Us</h2>
                <p>WE CAN PRINT THE UNIVERSE</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="image">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                        <h3>Voluptatem dignissimos provident quasi corporis</h3>
                        <p class="font-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</li>
                            <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit.</li>
                            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                                mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>WE CAN PRINT THE UNIVERSE</p>
            </div>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                        <i class="bx bx-receipt"></i>
                        <h4>Est labore ad</h4>
                        <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Harum esse qui</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-images"></i>
                        <h4>Aut occaecati</h4>
                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-shield"></i>
                        <h4>Beatae veritatis</h4>
                        <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                    </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/services.jpg");'
                    data-aos="fade-left" data-aos-delay="100"></div>
            </div>

        </div>
    </section><!-- End Services Section -->
    <!-- ======= Pricing Section ======= -->
    <section id="product" class="pricing section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>PRODUCT</h2>
                <p>WE CAN PRINT THE UNIVERSE</p>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-12 mt-5">
                    <div class="box">
                        <img class="img-fluid product" src="{{asset('img/tshirt.png')}}" alt="">
                        <div data-aos="zoom-in" data-aos-delay="100">
                            <ul>
                                <h3>T-shirt</h3>
                                <li>Cotton Combet 30s</li>
                            </ul>
                            <ul>
                                <h3>Lengan</h3>
                                <li>Lengan Pendek</li>
                                <li>Lengan Panjang</li>
                            </ul>
                            <ul>
                                <h3>Sablon</h3>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">SIZE CHART</a>
                            </div>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">ORDER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                </div>

                <div class="col-lg-4 col-md-12 mt-5">
                    <div class="box">
                        <img class="img-fluid product" src="{{asset('img/tshirt.png')}}" alt="">
                        <div data-aos="zoom-in" data-aos-delay="100">
                            <ul>
                                <h3>T-shirt</h3>
                                <li>Cotton Combet 30s</li>
                            </ul>
                            <ul>
                                <h3>Lengan</h3>
                                <li>Lengan Pendek</li>
                                <li>Lengan Panjang</li>
                            </ul>
                            <ul>
                                <h3>Sablon</h3>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">SIZE CHART</a>
                            </div>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">ORDER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 mt-5">
                    <div class="box">
                        <img class="img-fluid product" src="{{asset('img/tshirt.png')}}" alt="">
                        <div data-aos="zoom-in" data-aos-delay="100">
                            <ul>
                                <h3>T-shirt</h3>
                                <li>Cotton Combet 30s</li>
                            </ul>
                            <ul>
                                <h3>Lengan</h3>
                                <li>Lengan Pendek</li>
                                <li>Lengan Panjang</li>
                            </ul>
                            <ul>
                                <h3>Sablon</h3>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">SIZE CHART</a>
                            </div>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">ORDER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-auto">
                </div>

                <div class="col-lg-4 col-md-12 mt-5">
                    <div class="box">
                        <img class="img-fluid product" src="{{asset('img/tshirt.png')}}" alt="">
                        <div data-aos="zoom-in" data-aos-delay="100">
                            <ul>
                                <h3>T-shirt</h3>
                                <li>Cotton Combet 30s</li>
                            </ul>
                            <ul>
                                <h3>Lengan</h3>
                                <li>Lengan Pendek</li>
                                <li>Lengan Panjang</li>
                            </ul>
                            <ul>
                                <h3>Sablon</h3>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">SIZE CHART</a>
                            </div>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">ORDER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">
            <div class="quote-icon">
                <i class="bx bxs-quote-right"></i>
            </div>
            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <p>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                        Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    </p>
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram
                        malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    </p>
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                        minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    </p>
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                        velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                        veniam.
                    </p>
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                        culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                        quid.
                    </p>
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                </div>

            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>WE CAN PRINT THE UNIVERSE</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="zoom-in">
                        <div class="member-img">
                            <img src="{{asset('img/warouw.png')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-brand-whatsapp"></i></a>

                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Kevin Warouw</h4>
                            <span>Chief Executive Officer</span>
                            <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et
                                dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{asset('img/warouw.png')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Kevin Warouw</h4>
                            <span>Product Manager</span>
                            <p>Aspernatur iste esse aliquam enim et corporis. Molestiae voluptatem aut eligendi quis
                                aut. Libero vel amet voluptatem eos rerum non doloremque</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{asset('img/warouw.png')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Kevin Warouw</h4>
                            <span>CTO</span>
                            <p>Ut enim possimus nihil cupiditate beatae. Veniam facere quae non qui necessitatibus rerum
                                eos vero. Maxime sit sunt quo dolor autem est qui quaerat</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Team Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
            </div>

            <ul class="faq-list">

                <li data-aos="fade-up">
                    <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna
                        duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq1" class="collapse" data-parent=".faq-list">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                            curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="100">
                    <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc
                        faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq2" class="collapse" data-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                            Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                            tincidunt dui.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit
                        pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq3" class="collapse" data-parent=".faq-list">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                            elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                            pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at
                            elementum eu facilisis sed odio morbi quis
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                    <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam
                        eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq4" class="collapse" data-parent=".faq-list">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                            Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                            tincidunt dui.
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam
                        sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq5" class="collapse" data-parent=".faq-list">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                            ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing
                            bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="500">
                    <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius
                        vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq6" class="collapse" data-parent=".faq-list">
                        <p>
                            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer
                            malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem
                            dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat
                            commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non
                            blandit massa enim nec.
                        </p>
                    </div>
                </li>

            </ul>

        </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>WE CAN PRINT THE UNIVERSE</p>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>Semarang,Indonesia</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>jaggs.printing@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+6282323358515</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form"
                        data-aos="fade-left">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">

        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <a href="#header" class="scrollto footer-logo"><img src="assets/img/hero-logo.png" alt=""></a>
                    <h3>WE CAN PRINT THE UNIVERSE</h3>
                </div>
            </div>
            <div class="social-links">
                {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a> --}}
                <a href="https://www.instagram.com/jaggs.printing/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
                {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
            </div>

        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>JAGGS {{ now()->year }}</span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
@endsection
