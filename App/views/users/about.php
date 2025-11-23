<?php ob_start(); ?>

<section class="position-relative text-white text-center d-flex align-items-center justify-content-center" style="background-image: url('/img/lusta.png');
         background-size: cover;
         background-position: center;
         height: 100vh;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
    <div class="position-relative container">
        <h1 class="display-3 fw-bold">About Us</h1>
        <p class="lead">We create premium quality products for your needs</p>
        <a href="/user/about#story" class="btn btn-warning btn-lg rounded-pill mt-3 fw-semibold">Learn More</a>
    </div>
</section>
<section id="story" class="py-5 bg-white mt-4 d-flex justify-content-center align-items-center vh-100" style="border-top-left-radius: 35vh;">
    <div class="container-fluid px-5">
        <div class="row h-100 align-items-center flex-column flex-md-row">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="anim-scroll left shadow-lg w-50 text-center rounded-4 overflow-hidden mb-5 mb-md-0">
                    <img src="/img/LA.png" class="anim-scroll left img-fluid rounded-4" alt="Gambar Produk">
                </div>
            </div>
            <div class="col-12 col-md-6 text-center text-md-start ">
                <h2 class="anim-scroll right fw-bold fs-1 mb-4 ">Story Of Product</h2>
                <p class="anim-scroll right text-muted fs-5 mb-5 text-justify">
                    We created this shampoo out of concern for local products that tend to be similar and lack innovation. Through research and a new formulation, we present a real solution that cleans more effectively, protects motorcycle surfaces, and provides long-lasting shine.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="bg-white vh-100" style="padding-bottom: 4rem; padding-top: 6rem;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="anim-scroll bottom fw-bold display-6">What People Say</h2>
            <p class="anim-scroll bottom  text-muted">Testimonials from our beloved customers</p>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-6">
                <div class="anim-scroll left card border-0 shadow-lg p-4 text-center rounded-4 h-100">
                    <div class="card-body">
                        <i class="anim-scroll left bi bi-quote text-warning display-5 mb-3"></i>
                        <p class="anim-scroll left text-muted fst-italic mb-4">
                            "This product is truly amazing! The quality is excellent, and the service is very friendly. I will continue using products from this brand."
                        </p>
                        <h5 class="anim-scroll left fw-bold mb-0">Sarah Johnson</h5>
                        <p class="anim-scroll left text-muted small mb-0">Entrepreneur</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="anim-scroll right card border-0 shadow-lg p-4 text-center rounded-4 h-100">
                    <div class="card-body">
                        <i class="anim-scroll right bi bi-quote text-warning display-5 mb-3"></i>
                        <p class="anim-scroll right text-muted fst-italic mb-4">
                            "Fast service and the product arrived safely. I am very satisfied with my shopping experience!"
                        </p>
                        <h5 class="anim-scroll right fw-bold mb-0">Michael Tan</h5>
                        <p class="anim-scroll right text-muted small mb-0">Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-white my-3">
    <div class="container text-center">
        <div class="text-center mb-5">
            <h2 class="anim-scroll bottom fw-bold">Our Team</h2>
            <p class="anim-scroll bottom text-muted">Meet the people behind our success</p>
        </div>
        <div class="row g-5 d-flex justify-content-center">
            <!-- Card 1 -->
            <div class="anim-scroll left col-12 col-sm-6 col-md-4">
                <div class="card border-0 shadow-lg position-relative overflow-hidden">
                    <img src="/img/people.jpg" class="card-img-top img-fluid" alt="Team Member">
                    <div
                        class="position-absolute bottom-0 start-50 translate-middle-x bg-dark bg-opacity-75 text-white text-center w-100 py-2">
                        <h5 class="mb-0">Hector Salamangka</h5>
                        <small>Lead Developer</small>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="anim-scroll bottom col-12 col-sm-6 col-md-4">
                <div class="card border-0 shadow-lg position-relative overflow-hidden">
                    <img src="/img/people.jpg" class="card-img-top img-fluid" alt="Team Member">
                    <div
                        class="position-absolute bottom-0 start-50 translate-middle-x bg-dark bg-opacity-75 text-white text-center w-100 py-2">
                        <h5 class="mb-0">Sinta Ayu</h5>
                        <small>Marketing Manager</small>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="anim-scroll right col-12 col-sm-6 col-md-4">
                <div class="card border-0 shadow-lg position-relative overflow-hidden">
                    <img src="/img/people.jpg" class="card-img-top img-fluid" alt="Team Member">
                    <div
                        class="position-absolute bottom-0 start-50 translate-middle-x bg-dark bg-opacity-75 text-white text-center w-100 py-2">
                        <h5 class="mb-0">Gustafo Fring</h5>
                        <small>Marketing Manager</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php $content = ob_get_clean();
include '../app/views/layout/main.php'; ?>