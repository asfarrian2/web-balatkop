
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="./admins/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="./admins/css/styles.css" />

  <title>Balatkop-uk Prov. Kalsel</title>
</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <img src="./admins/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper" class="auth-customizer-none">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
            <div class="card mb-0">
              <div class="card-body">
                <a href="../main/index.html" class="text-nowrap logo-img text-center d-block mb-2 w-100">
                  <img src="./admins/images/logos/logo_adm.png" height="40px" class="dark-logo" alt="Logo-Dark" />
                </a>
                <div class="position-relative text-center my-4">
                  <p class="mb-0 fs-4 px-3 d-inline-block bg-body text-dark z-index-5 position-relative">Silahkan Masuk
                  </p>
                  <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                </div>
                @php
                    $messagewarning = Session::get('warning');
                @endphp
                @if (Session::get('warning'))
                <div class="alert customize-alert alert-dismissible alert-light-danger bg-danger-subtle text-danger fade show remove-close-icon" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="d-flex align-items-center  me-3 me-md-0">
                      <i class="ti ti-alert-circle fs-5 me-2 text-danger"></i>
                      {{ $messagewarning }}
                    </div>
                </div>
                @endif
                <form action="/11475-adm/autentikasi" method="post">
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input name="username" type="text" class="form-control">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Sign In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
  function handleColorTheme(e) {
    document.documentElement.setAttribute("data-color-theme", e);
  }
  <div class="dark-transparent sidebartoggler"></div>
  <!-- Import Js Files -->
  <script src="./admins/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./admins/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="./admins/js/theme/app.init.js"></script>
  <script src="./admins/js/theme/theme.js"></script>
  <script src="./admins/js/theme/app.min.js"></script>

  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>