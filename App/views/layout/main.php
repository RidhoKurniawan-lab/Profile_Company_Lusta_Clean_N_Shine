<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/custom.css">
    <title>Portofolio</title>
</head>

<body class="bg-yellow">
    <header>
        <!-- navbar -->
        <nav class="shadow fixed-top container-fluid">
            <div class="px-2 row d-flex align-items-center" style="height: 70px;">
                <div class="text-white col-10 col-md-5 fw-bold text-shadow d-flex align-items-center">
                    <h3 class="mb-0 fs-2 fs-sm-6 text-yellow">Clean N Shine</h3>
                </div>
                <div id="menu" class="col-7 d-flex justify-content-end">
                    <ul id="navMenu"
                        class="gap-4 px-2 py-2 m-0 list-unstyled bg-yellow rounded-pill d-flex align-items-center position-relative">
                        <li class="px-4 py-1 text-black nav-item rounded-pill fs-6 z-1" data-url="/">Home</li>
                        <li class="px-4 py-1 text-black nav-item rounded-pill fs-6 z-1" data-url="/user/product">Product</li>
                        <li class="px-4 py-1 text-black nav-item rounded-pill fs-6 z-1" data-url="/user/about">About Us</li>
                        <li class="px-4 py-1 text-black nav-item rounded-pill fs-6 z-1" data-url="/user/contact">Contact</li>

                        <div id="bg-nav-item" class="bg-white position-absolute rounded-pill"></div>
                    </ul>
                </div>
                <div id="burger" class="col-2 col-md-7"> 
                    <div class="d-flex justify-content-end">
                        <i class="text-black bi bi-list fs-2" style="cursor: pointer;"></i>
                    </div>
                </div>

            </div>

        </nav>
        <!-- sidebar -->
        <div id="sidebar" class="text-white position-fixed bg-core-light vh-100">
            <div id="close-burger" class="p-3 d-flex align-items-center active">
                <i class="bi bi-x-lg fs-4" style="cursor: pointer;"></i>
            </div>
            <ul class="px-4 py-3 list-unstyled text-end">
                <li><a href="/"
                        class="px-3 py-3 text-white text-decoration-none d-block hover-btn-blue">Home</a></li>
                <li><a href="/user/product"
                        class="px-3 py-3 text-white text-decoration-none d-block hover-btn-blue">Product</a>
                </li>
                <li><a href="/user/about" class="px-3 py-3 text-white text-decoration-none d-block hover-btn-blue">About Us</a>
                </li>
                <li><a href="/user/contact" class="px-3 py-3 text-white text-decoration-none d-block hover-btn-blue">Contact</a>
                </li>
            </ul>
        </div>
        <div id="overlay" class="top-0 bg-opacity-50 position-fixed start-0 w-100 h-100 bg-dark d-none">
        </div>
    </header>
    <main>

    <?php echo $content ?? '';?>
    

    </main>
    <footer class="pb-4 text-white bg-yellow d-flex justify-content-center" style="padding-top: 8rem;">
        <div class="container mx-4 text-black mx-md-0">
            <div class="row gy-4">
                <div class="col-12 col-md-4">
                    <h5 class="mb-3 fw-bold fs-2">Clean N Shine</h5>
                    <p class="mb-1">Unknow Street, Regol, Bandung</p>
                    <p class="mb-1">+62 8XXX XXXX XXXX</p>
                    <p class="mb-3">XXXXXXXXX@gmail.com</p>
                </div>
                <div class="col-6 col-md-2">
                    <h6 class="mb-3 fw-bold text-uppercase">Help</h6>
                    <ul class="list-unstyled">
                        <li><a class="text-black-50 text-decoration-none">FAQ & Help Docs</a></li>
                        <li><a class="text-black-50 text-decoration-none">Store Location</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h6 class="mb-3 fw-bold text-uppercase">Information</h6>
                    <ul class="list-unstyled">
                        <li><a href="/user/product" class="text-black-50 text-decoration-none">Product</a></li>
                        <li><a href="/user/about" class="text-black-50 text-decoration-none">About Us</a></li>
                        <li><a href="/user/contact" class="text-black-50 text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3">
                    <h6 class="mb-3 fw-bold text-uppercase">Support</h6>
                    <ul class="list-unstyled">
                        <li><a class="text-black-50 text-decoration-none">Customer Service</a></li>
                        <li><a class="text-black-50 text-decoration-none">Privacy Policy</a></li>
                        <li><a class="text-black-50 text-decoration-none">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-3 border-secondary">
            <div class="text-center">
                <small class="text-black-50">
                    © 2025 Clean N Shine. All Rights Reserved.
                </small>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="/js/animasi-user.js"></script>
<script src="/js/user.js"></script>
</html>