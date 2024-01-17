<!DOCTYPE html>
<html lang="id">
<head>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand">MM Nurul Iman</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                </div>
            </div>
        </nav>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Registrasi</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <h2>Registrasi Admin/Petugas</h2>
      <form action="proses-registrasi.php" method="post">
        <div class="mb-3">
          <label for="registerUsername" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="registerUsername" name="namalengkap" required>
        </div>
        <div class="mb-3">
          <label for="registerUsername" class="form-label">Username</label>
          <input type="text" class="form-control" id="registerUsername" name="username" required>
        </div>
        <div class="mb-3">
          <label for="registerPassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="registerPassword" name="password" required>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirmPassword" name="confirmpassword" required>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
        <a href="login.php" class="btn btn-success btn-user btn-block">
          <i class=""></i>Sudah Punya Akun
        </a>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
