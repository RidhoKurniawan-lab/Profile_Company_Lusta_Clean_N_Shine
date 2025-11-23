<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/css/custom.css">
  <style>
  </style>
</head>

<body class="h-100 bg-white">
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold fs-3 text-yellow" href="#">LA Clean N Shine</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end pe-5 " id="navbarNav">
          <ul class="navbar-nav gap-5">
            <li class="nav-item">
              <a class="nav-link fw-semibold text-warning" aria-current="page" href="/admin/contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold text-warning" href="/admin/product">Product</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>

    <?php echo $content ?? ''; ?>

  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
  <script src="/js/admin.js"></script>
</body>

</html>