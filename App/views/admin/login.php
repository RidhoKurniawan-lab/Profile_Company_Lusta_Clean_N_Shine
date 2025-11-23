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
  <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg rounded-4 p-4" style="min-width: 350px; max-width: 400px; width: 100%;">
      <h3 class="text-center fw-bold mb-4">Login</h3>
      <form id="formLogin">
        <div class="mb-3">
          <label for="username" class="form-label fw-semibold">Username</label>
          <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
          <p id="validasi-username" class="ps-2 text-danger hidden"></p>
        </div>
        <div class="mb-3">
            <div class="position-relative">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input id="password" name="password" type="password" class="form-control pe-5" placeholder="Enter password">
                <i id="password-eye" class="bi bi-eye-slash position-absolute translate-middle-y"></i>
            </div>
          <p id="validasi-password" class="ps-2 text-danger hidden"></p>
        </div>
        <button type="submit" class="btn btn-warning w-100 rounded-pill fw-semibold mt-3">Login</button>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="/js/aunt.js"></script>
</body>
</html>
