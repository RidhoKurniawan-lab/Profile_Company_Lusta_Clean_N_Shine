<?php ob_start(); ?>
<!-- carousel  -->
<section class="py-5 bg-white vh-100 d-flex justify-content-center align-items-center">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000"
        style="padding-top: 4.5rem;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="order-2 text-center col-md-6 text-md-start order-md-1">
                            <h2 class="mb-3 fw-bold fs-1">100ml variant</h2>
                            <p class="px-5 mb-5 text-justify text-muted px-md-0">
                                This 100 ml product is released as a prototype version for quality testing, formulation, and market acceptance. Not for commercial purposes or general sales.
                            </p>
                        </div>
                        <div class="order-1 my-5 text-center col-md-6 order-md-2">
                            <img src="/img/mangga100.PNG" class=" img-fluid rounded-4 w-50" alt="Gambar 1">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="order-2 text-center col-md-6 text-md-start order-md-1">
                            <h2 class="mb-3 fw-bold fs-1">250ml variant</h2>
                            <p class="px-5 text-justify text-muted px-md-0">
                                This 250 ml product is the commercial version with a tested formulation and is ready for mass production
                            </p>
                            <a href="/user/detail" class="px-4 btn btn-warning rounded-pill fw-semibold">View Details</a>
                        </div>
                        <div class="order-1 my-5 text-center col-md-6 order-md-2">
                            <img src="/img/manggo250.png" class="img-fluid rounded-4 w-50" alt="Gambar 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our product  -->
<section id="card-product" class="py-5 my-3 bg-white">
    <div class="container py-5">
        <!-- Judul Section -->
        <div class="mb-5 text-center">
            <h2 class="anim-scroll bottom fw-bold">Our Product</h2>
            <p class="anim-scroll bottom text-muted">Premium Quality For Your Vehicle</p>
        </div>

        <!-- Grid Card -->
        <div class="row g-4">
            <!-- CARD 1 -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <div class="border-0 anim-scroll bottom card position-relative">
                    <img src="/img/manggo250.PNG" class="card-img-top rounded-4" alt="Product 1">

                    <div class="top-0 m-3 bg-white shadow-lg position-absolute end-0 rounded-5 d-flex align-items-center justify-content-center"
                        style="width: 40px; height: 40px;">
                        <i class="bi bi-heart-fill text-danger fs-5"></i>
                    </div>
                    <div class="bg-transparent card-body">
                        <h5 class="card-title text-start">Mango 250ml</h5>
                        <div class="mb-2 d-flex align-items-center">
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning me-1"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <a href="/user/detail" class="my-2 btn btn-warning w-100 rounded-pill fw-semibold">Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean();
include '../app/views/layout/main.php'; ?>