<!-- Navbar -->
<nav class="navbar navbar-expand-lg p-2 mb-5" style="background-color: #29978C;">
  <!-- Container -->
  <div class="container">
    <!-- Image -->
    <a class="navbar-brand text-light" href="<?= BASEURL ?>/admin">
      <img src="<?= BASEURL ?>/img/assets/Navbar.png" width="38"/>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Left Content -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Home -->
        <li class="nav-item">
          <a class="nav-link active fw-semibold text-light" href="<?= BASEURL ?>/admin/index">Home</a>
        </li>
        <!-- Customer -->
        <li class="nav-item">
          <a class="nav-link active fw-semibold text-light" href="<?= BASEURL ?>/admin/customer">Customer</a>
        </li>
        <!-- Supplier -->
        <li class="nav-item ">
          <a class="nav-link fw-semibold text-light" href="<?= BASEURL ?>/admin/supplier">Supplier</a>
        </li>
        <!-- Product -->
        <li class="nav-item ">
          <a class="nav-link fw-semibold text-light" href="<?= BASEURL ?>/admin/product">Product</a>
        </li>
         <!--Feedback -->
         <li class="nav-item ">
          <a class="nav-link fw-semibold text-light" href="<?= BASEURL ?>/admin/feedback">Feedback</a>
        </li>
      </ul>
      <!-- Right Content -->
      <div>
        <!-- History -->
        <a href="<?= BASEURL ?>/admin/history"><i class="fa fa-history text-light fs-5"></i></a>
      </div>
    </div>
  </div>
</nav>