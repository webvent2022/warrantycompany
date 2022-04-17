
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="icon" href="favicon.ico">
  </head>
  <body>
    <div class="">
        
      <nav class="navbar navbar-expand-lg navbar-light py-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="img-fluid" src="images/logo.svg" alt="" width="150px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav02" aria-controls="nav02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="nav02">
            <ul class="navbar-nav mt-3 mt-lg-0 mb-3 mb-lg-0 ms-lg-3">
              <li class="nav-item me-4"><a class="nav-link" href="#">About</a></li>
            </ul>
          </div>
          <div class="d-none d-lg-flex" action="">
            <div class="input-group">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke="currentColor" style="width: 24px;height: 24px">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <div class=''>
      @yield('main-container')
    </div>
    <div class="">
      <footer class="py-5">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom">
            <div class="mb-5">
              <a class="d-inline-block" href="#">
                <img class="img-fluid" src="images/logo.svg" alt="" width="150px">
              </a>
            </div>
            <div>
              <ul class="list-unstyled d-flex flex-wrap align-items-center">
                <li class="me-4"><a class="link-secondary" href="#">About</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="mb-5"></div>
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-between">
            <p>All rights reserved © WarrantyCompanyReview <?php echo date('Y');?></p>
            <div>
              <a class="d-inline-block me-4" href="#">
                <img src="bootstrap5-plain-assets/socials/facebook.svg" alt="">
              </a>
              <a class="d-inline-block me-4" href="#">
                <img src="bootstrap5-plain-assets/socials/twitter.svg" alt="">
              </a>
              <a class="d-inline-block me-4" href="#">
                <img src="bootstrap5-plain-assets/socials/github.svg" alt="">
              </a>
              <a class="d-inline-block me-4" href="#">
                <img src="bootstrap5-plain-assets/socials/instagram.svg" alt="">
              </a>
              <a class="d-inline-block" href="#">
                <img src="bootstrap5-plain-assets/socials/linkedin.svg" alt="">
              </a>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>
