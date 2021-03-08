@extends('layouts.main')
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
                        <img src="{{asset('gambar/aboutus/about.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                        <p>JAGGS Printing lahir di kota Semarang pada tahun 2020. Kami merupakan sebuah perusahaan
                            penyedia jasa percetakan dengan kualitas terbaik dan teratas dikelasnya. Kami mengajak anda
                            untuk mulai bangga dengan design original anda masing-masing dan menyediakan jasa yang dapat
                            mencetak design tersebut dalam produk yang kami miliki, dengan kuantitas pemesanan mulai
                            dari satuan. Jasa yang kami tawarkan dapat membebaskan anda dari keterbatasan jumlah minimum
                            pemesanan dan design suatu produk yang anda inginkan. Dikala banyaknya usaha percetakan yang
                            terbatas dengan adanya jumlah minimum pemesanan, JAGGS Printing hadir dengan inovasi baru
                            sebagai solusinya.</p>
                        <h3>Visi</h3>
                        <p class="font-italic">
                            JAGGS Printing ingin memberikan sarana bagi semua orang yang ingin mengaplikasikan
                            kreativitas design original mereka kedalam bentuk produk yang kami sediakan sesuai dengan
                            semboyan kami "we can print the universe" </p>
                        <h3>Misi</h3>
                        <ul>
                            <li><i class="bx bx-check-double"></i> JAGGS Printing berfokus pada proses pencetakan
                                berkualitas atas produk-produk yang kami tawarkan </li>
                            <li><i class="bx bx-check-double"></i> Menjadi wadah bagi individu yang ingin menggunakan
                                produk yang diminati dengan design originalnya sendiri </li>
                            <li><i class="bx bx-check-double"></i> Menjadi solusi atas permasalahan jumlah minimum
                                pemesanan produk yang kerap ditemui di perusahaan percetakan lain </li>
                            <li><i class="bx bx-check-double"></i> Menanamkan nilai kebanggaan atas produk lokal dengan
                                design original pelanggan yang telah dipercayakan kepada kami</li>
                        </ul>
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
                        <h4>Tidak ada minimum order</h4>
                        <p>pemesanan dapat dilakukan dari minimum 1pcs</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-images"></i>
                        <h4>Free design</h4>
                        <p>pemesan dapat mengutarakan keinginan atas desain produk yang diharapkan, dan kami akan
                            menambahkan sentuhan kami di desain produk tersebut sesuai dengan kesepakatan, dan syarat
                            yang telah disetujui. Max revisi 3x</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                        <i class="bx bx-cube-alt"></i>
                        <h4>Free ongkir</h4>
                        <p>Bagi pemesan yang berdomisili di Kota Semarang, Jawa Tengah tidak dikenakan biaya kirim</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                        <i class="bx bx-shield"></i>
                        <h4>Cepat</h4>
                        <p>Proses pembuatan produk yang singkat, dalam kurun waktu 3-7 hari</p>
                    </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2"
                    style='background-image: url("{{asset('gambar/service/service.jpg')}}");' data-aos="fade-left"
                    data-aos-delay="100"></div>
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
                @foreach ($products as $product)
                <div class="col-lg-4 col-md-12 mt-5">
                    <div class="box">
                        <img class="img-fluid product" src="{{asset('storage/'.$product->image)}}" alt="">
                        <div data-aos="zoom-in" data-aos-delay="100">
                            <ul>
                                <h3>{{$product->title}}</h3>
                                <h2>{{$product->price}}k</h2>
                                <li>{{$product->material}}</li>
                            </ul>
                            <ul>
                                <h3>SIZE</h3>
                                {!!$product->size!!}
                            </ul>
                            <div class="btn-wrap">
                                <a href="{{asset('storage/'.$product->price_list)}}" target="_blank" class="btn-buy">PRICE LIST</a>
                            </div>
                            <div class="btn-wrap">
                                <a href="{{asset('storage/'.$product->color)}}" target="_blank" class="btn-buy">COLOUR</a>
                            </div>
                            <div class="btn-wrap">
                                <a href="https://api.whatsapp.com/send?phone=+6282323358515&text=Saya%20ingin%20memesan%20{{$product->title}}" class="btn-buy">ORDER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
                        desain apapun yg ada dipikiranmu bisa terealisasikan dengan jaggs. karena jaggs can print the
                        universe !! kualitas no 1. recoment !!
                    </p>
                    <h3>Krama Ramadhan</h3>
                    {{-- <h4>Ceo &amp; Founder</h4> --}}
                </div>

                <div class="testimonial-item">
                    <p>
                        Keren banget design kaos di JAGGS Printing, recommended paling bisa!
                    </p>
                    <h3>Naufal Ridho M</h3>
                    {{-- <h4>Designer</h4> --}}
                </div>

                <div class="testimonial-item">
                    <p>
                        Keren banget dab pokoknya, yuk yang mau bikin jaket custom bisa kepoin JAGGS Printing!
                    </p>
                    <h3>Amar</h3>
                    {{-- <h4>Store Owner</h4> --}}
                </div>

                <div class="testimonial-item">
                    <p>
                        Bener-bener definisi kaos yang nyaman banget buat dipake. Apalagi dengan design kaos semau kamu,
                        otomatis kamu bisa menuangkan ide dan sekaligus mengapresiasi diri akan karya yang pengen kamu
                        tuangkan ke baju dari JAGGS Printing
                    </p>
                    <h3>Novrizal</h3>
                </div>

                <div class="testimonial-item">
                    <p>
                        nilai 10 lah gila aja. suka banget-banget, dingin gitu lagi bahannya!
                        <h3>Jilan Nabilah</h3>
                        {{-- <h4>Entrepreneur</h4> --}}
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
                                {{-- <a href=""><i class="icofont-brand-whatsapp"></i></a> --}}

                            </div>
                        </div>
                        <div class="member-info">
                            <h4>GIOVANI KEVIN NICOLAAS WAROUW</h4>
                            <span>CEO JAGGS PRINTING</span>
                            {{-- <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et
                                dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis</p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{asset('img/bagas.jpg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>BAGAS PANGESTU PRIBADI</h4>
                            <span>FOUNDER</span>
                            {{-- <p>Aspernatur iste esse aliquam enim et corporis. Molestiae voluptatem aut eligendi quis
                                aut. Libero vel amet voluptatem eos rerum non doloremque</p> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{asset('img/ijul.jpeg')}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href=""><i class="icofont-instagram"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>ZULFIKAR MUHAMMAD</h4>
                            <span>FOUNDER</span>
                            {{-- <p>Ut enim possimus nihil cupiditate beatae. Veniam facere quae non qui necessitatibus rerum
                                eos vero. Maxime sit sunt quo dolor autem est qui quaerat</p> --}}
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
                    <a data-toggle="collapse" class="collapsed" href="#faq1">Berapa lama waktu yang dibutuhkan dari
                        awal pemesanan produk hingga sampai di alamat tujuan? <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq1" class="collapse" data-parent=".faq-list">
                        <p>
                            Setiap produk yang kami tawarkan dapat memakan waktu 2 sampai 7 hari agar produk tersebut
                            sampai ditangan pemesan. <br>
                            Hal ini bergantung pada jumlah produk, kesulitan design produk, jarak lokasi pemesan. <br>
                            Pemesan akan mendapatkan pemberitahuan terlebih dahulu bila barang yang telah dipesan akan
                            memakan waktu lebih dari 7 hari agar sampai di tujuan </p>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="100">
                    <a data-toggle="collapse" href="#faq2" class="collapsed">Bagaimana cara pemesanan produk yang
                        diinginkan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq2" class="collapse" data-parent=".faq-list">
                        <p>
                            Pemesanan produk dapat dilakukan melalui WhatsApp yang telah dicantumkan di laman Instagram
                            JAGGS.Printing serta Website kami printing.jaggs.id <br>
                            pemesanan akan dilayani secara langsung oleh admin yang bersangkutan. <br>
                            Untuk informasi lebih lanjut mengenai detail pemesanan produk yang berkaitan dapat
                            didapatkan melalui WhatsApp kami
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                    <a data-toggle="collapse" href="#faq3" class="collapsed">Bagaimana cara menentukan rincian harga
                        atas produk JAGGS Printing yang akan dipesan?<i class="bx bx-chevron-down icon-show"></i><i
                            class="bx bx-x icon-close"></i></a>
                    <div id="faq3" class="collapse" data-parent=".faq-list">
                        <p>
                            Rincian harga dapat dilihat di katalog kami yang akan diberikan via WhatsApp serta website
                            kami di printing.jaggs.id <br>
                            Total harga atas produk yang dipesan merupakan penjumlahan dari harga produk tanpa design,
                            biaya pencetakan design yang diinginkan (dapat dilihat di price list kami), serta biaya
                            pengantaran barang bagi pemesan yang berdomisili di luar kota semarang.
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="300">
                    <a data-toggle="collapse" href="#faq4" class="collapsed">Apakah ada batasan atas design yang dapat
                        dipesan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq4" class="collapse" data-parent=".faq-list">
                        <p>
                            Kami tidak memberikan batasan atas design yang dapat kami cetak. Namun, pemesan harus
                            terlebih dulu menyediakan mock up atas design yang ingin dicetak dalam bentuk file .PNG
                            kualitas terbaik, yang kemudian dapat dikirimkan ke email kami jaggs.printing@gmail.com <br>
                            info lebih lanjut dapat ditanyakan via WhatsApp
                        </p>
                    </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="400">
                    <a data-toggle="collapse" href="#faq5" class="collapsed">Apakah pembayaran dilakukan di awal
                        pemesanan atau di akhir saat barang sudah diterima? <i
                            class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                    <div id="faq5" class="collapse" data-parent=".faq-list">
                        <p>
                            Pembayaran atas produk yang dipesan dapat dilakukan di awal pemesanan produk tersebut.
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
                <a href="https://www.instagram.com/jaggs.printing/" target="_blank" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=+6282323358515&text=Saya%20ingin%20memesan%20" target="_blank" class="instagram"><i
                        class="bx bxl-whatsapp"></i></a>
                <a href="mailto::jaggs.printing@gmail.com" target="_blank" class="instagram"><i
                        class="bx bx-envelope"></i></a>
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
