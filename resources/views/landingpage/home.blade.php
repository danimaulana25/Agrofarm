@extends('layouts.main')
@section('title'){{'Agrofarm Globalindo - Home'}} @endsection
@section('content')
<!-- Begin Page Content -->
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="/assets/img/cofeehome.jpeg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-3  animated slideInDown">AUTHENTIC INDONESIAN COFFEE BEANS SUPPLIER</h1>
                                <p class="fs-5 mb-5 animated slideInDown" style="color: #379237 ; ">Indonesian Coffee Supplier Specialist to the Middle East</p>
                                <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                    <b>Learn More</b>
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="/assets/img/coffeehome2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-3 animated slideInDown">AUTHENTIC INDONESIAN COFFEE BEANS SUPPLIER</h1>
                                <p class="fs-5 mb-5 animated slideInDown" style="color: #379237 ; ">Indonesian Coffee Supplier Specialist to the Middle East</p>
                                <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                    Learn More
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 pt-5 pe-5" src="/assets/img/about1.jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="/assets/img/about2.jpg" alt="" style="width: 200px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">About Us</div>
                    <h1 class="display-6 mb-5">PT Agrofarm Globalindo Investama</h1>
                    <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                        <p class="text-dark mb-2">Indonesia mempunyai hasil alam yang kaya, membuat kita berupaya untuk memberikan hasil alam Indonesia terbaik salah satunya kopi Indonesia yang memiliki ciri khas dan kualitas yang bermutu.</p>
                    </div>
                    <p class="mb-5">Agro Coffee adalah pemasok biji kopi Arabica dan Robusta Java dari gunung Semeru, Gunung Arjuna, Gunung Kawi dari Indonesia. Dalam mencari jenis kopi terbaik di tingkat Jawa pada ketinggian 1200 - 1300 mdpl, kami memilih kopi terbaik dengan melakukan proses tanam, petik dan panen dengan cara terbaik untuk menghasilkan hasil berkualitas untuk ditawarkan untuk pembeli.</p>
                    <a class="btn btn-primary py-2 px-3 me-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                    <a class="btn btn-outline-primary py-2 px-3" href="">
                        Contact Us
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Feature Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Do</div>
            <h1 class="display-6 mb-5">Learn More About Our Commitment</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="/assets/img/integrity.png" alt="">
                    <h4 class="mb-3">Integritas</h4>
                    <p class="mb-4">Pondasi utama kami berpegang teguh dengan mengatakan kebenaran, menepati janji dan memperlakukan orang dengan adil dan hormat untuk menjaga kepercayaan.</p>
                    <!-- <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="/assets/img/quality.png" alt="">
                    <h4 class="mb-3">Kualitas</h4>
                    <p class="mb-4">Kualitas ditunjukkan dengan memberikan layanan terbaik, memilih biji kualitas terbaik untuk kepuasan pelanggan serta support kebutuhan pelanggan dengan memberikan kuantitas dan kualitas yang dibutuhkan.</p>
                    <!-- <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="/assets/img/commitment.png" alt="">
                    <h4 class="mb-3">Komitmen</h4>
                    <p class="mb-4">Berkomitmen untuk melayani sebagai hak istimewa yang diberikan kepada pelanggan dengan profesional, bertanggung jawab, tuntas dan akurat.</p>
                    <!-- <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="/assets/img/inovation.png" alt="">
                    <h4 class="mb-3">Inovasi</h4>
                    <p class="mb-4">Menciptakan, merancangkan dan mengembangkan produk dan layanan yang memiliki kualitas dan daya tarik yang tinggi untuk menjadi preferensi pelanggan sebagai bentuk antusiasme kami dalam inovasi.</p>
                    <!-- <a class="btn btn-outline-primary px-3" href="">
                        Learn More
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Causes Start -->
<div class="container-xxl bg-light my-5 py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Know More About Our Product Process</div>
            <h1 class="display-6 mb-5">Every Child Deserves The Opportunity To Learn</h1>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Education</small>
                        </div>
                        <h5 class="mb-3">Education For African Children</h5>
                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="/assets/img/featureCause1.jpeg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Pure Water</small>
                        </div>
                        <h5 class="mb-3">Ensure Pure Drinking Water</h5>
                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="/assets/img/featureCause2.jpeg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                    <div class="text-center p-4 pt-0">
                        <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                            <small>Healthy Life</small>
                        </div>
                        <h5 class="mb-3">Ensure Medical Treatment</h5>
                        <p>Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos</p>
                        <div class="causes-progress bg-light p-3 pt-2">
                            <div class="d-flex justify-content-between">
                                <p class="text-dark">$10,000 <small class="text-body">Goal</small></p>
                                <p class="text-dark">$9,542 <small class="text-body">Raised</small></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                    <span>90%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="/assets/img/featureCause3.jpeg" alt="">
                        <div class="causes-overlay">
                            <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Causes End -->


<!-- Donate Start -->
<!-- <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="/assets/img/carousel-2.jpg">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Donate Now</div>
                <h1 class="display-6 text-white mb-5">Thanks For The Results Achieved With You</h1>
                <p class="text-white-50 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100 bg-white p-5">
                    <form>
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="btn-group d-flex justify-content-around">
                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                    <label class="btn btn-light py-3" for="btnradio1">$10</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                    <label class="btn btn-light py-3" for="btnradio2">$20</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                    <label class="btn btn-light py-3" for="btnradio3">$30</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary px-5" style="height: 60px;">
                                    Donate Now
                                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Donate End -->


<!-- Team Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Team Members</div>
            <h1 class="display-6 mb-5">Let's Meet With Our Ordinary Soldiers</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/assets/img/team-1.jpg" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Full Name</h5>
                        <p class="text-primary">Designation</p>
                        <div class="team-social text-center">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/assets/img/team-2.jpg" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Full Name</h5>
                        <p class="text-primary">Designation</p>
                        <div class="team-social text-center">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/assets/img/team-3.jpg" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Full Name</h5>
                        <p class="text-primary">Designation</p>
                        <div class="team-social text-center">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="/assets/img/team-4.jpg" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Full Name</h5>
                        <p class="text-primary">Designation</p>
                        <div class="team-social text-center">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Team End -->


<!-- Prouduct Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Produk</div>
            <h1 class="display-6 mb-5">Trusted By Thousands Of People And Nonprofits</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/assets/img/produk/Robusta.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Doner Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/assets/img/produk/Arabica.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Doner Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="/assets/img/produk/Robusta.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h5 class="mb-1">Doner Name</h5>
                    <span class="fst-italic">Profession</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product End -->
@endsection