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
        <nav class="fixed-top container-fluid shadow">
            <div class="row d-flex align-items-center px-2" style="height: 70px;">
                <div class="col-10 col-md-5 fw-bold text-white text-shadow d-flex align-items-center">
                    <h3 class="fs-2 fs-sm-6 mb-0 text-yellow">Clean N Shine</h3>
                </div>
                <div id="menu" class="col-7 d-flex justify-content-end">
                    <ul id="navMenu"
                        class="list-unstyled bg-yellow rounded-pill px-2 m-0 d-flex align-items-center py-2 gap-4 position-relative">
                        <li class="nav-item text-black rounded-pill px-4 py-1 fs-6 z-1" data-url="/">Home</li>
                        <li class="nav-item text-black rounded-pill px-4 py-1 fs-6 z-1" data-url="/user/product">Product</li>
                        <li class="nav-item text-black rounded-pill px-4 py-1 fs-6 z-1" data-url="/user/about">About Us</li>
                        <li class="nav-item text-black rounded-pill px-4 py-1 fs-6 z-1" data-url="/user/contact">Contact</li>

                        <div id="bg-nav-item" class="position-absolute rounded-pill bg-white"></div>
                    </ul>
                </div>
                <div id="burger" class="col-2 col-md-7"> 
                    <div class="d-flex justify-content-end">
                        <i class="bi bi-list fs-2 text-black" style="cursor: pointer;"></i>
                    </div>
                </div>

            </div>

        </nav>
        <!-- sidebar -->
        <div id="sidebar" class="position-fixed bg-core-light text-white vh-100">
            <div id="close-burger" class="d-flex align-items-center p-3 active">
                <i class="bi bi-x-lg fs-4" style="cursor: pointer;"></i>
            </div>
            <ul class="list-unstyled py-3 text-end px-4">
                <li><a href="/"
                        class="text-white text-decoration-none d-block py-3 hover-btn-blue px-3">Home</a></li>
                <li><a href="/user/product"
                        class="text-white text-decoration-none d-block py-3 hover-btn-blue px-3">Product</a>
                </li>
                <li><a href="/user/about" class="text-white text-decoration-none d-block py-3 hover-btn-blue px-3">About Us</a>
                </li>
                <li><a href="/user/contact" class="text-white text-decoration-none d-block py-3 hover-btn-blue px-3">Contact</a>
                </li>
            </ul>
        </div>
        <div id="overlay" class="position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-50 d-none">
        </div>
    </header>
    <main>

    <?php echo $content ?? '';?>

    </main>
    <footer class="bg-yellow text-white pb-4 d-flex justify-content-center" style="padding-top: 8rem;">
        <div class="container text-black mx-4 mx-md-0">
            <div class="row gy-4">
                <div class="col-12 col-md-4">
                    <h5 class="fw-bold mb-3 fs-2">Clean N Shine</h5>
                    <p class="mb-1">Unknow Street, Regol, Bandung</p>
                    <p class="mb-1">+62 8XXX XXXX XXXX</p>
                    <p class="mb-3">XXXXXXXXX@gmail.com</p>
                </div>
                <div class="col-6 col-md-2">
                    <h6 class="fw-bold mb-3 text-uppercase">Help</h6>
                    <ul class="list-unstyled">
                        <li><a class="text-black-50 text-decoration-none">FAQ & Help Docs</a></li>
                        <li><a class="text-black-50 text-decoration-none">Store Location</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h6 class="fw-bold mb-3 text-uppercase">Information</h6>
                    <ul class="list-unstyled">
                        <li><a href="/user/product" class="text-black-50 text-decoration-none">Product</a></li>
                        <li><a href="/user/about" class="text-black-50 text-decoration-none">About Us</a></li>
                        <li><a href="/user/contact" class="text-black-50 text-decoration-none">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3">
                    <h6 class="fw-bold mb-3 text-uppercase">Support</h6>
                    <ul class="list-unstyled">
                        <li><a class="text-black-50 text-decoration-none">Customer Service</a></li>
                        <li><a class="text-black-50 text-decoration-none">Privacy Policy</a></li>
                        <li><a class="text-black-50 text-decoration-none">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary mt-4 mb-3">
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