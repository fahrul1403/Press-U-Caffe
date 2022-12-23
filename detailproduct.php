<?php
 include 'components/header.php';
 
 session_start();
 if (!isset($_SESSION['username'])){
  header("Location: login.php");

  } elseif(isset($_SESSION['username'])){
   if($_SESSION['role'] === 'admin'){
     header("Location: dashboardadmin.php");
    }  elseif ($_SESSION['role'] === 'cashier'){
      header("Location: dashboardcashier.php");
    }
 } 

?>
<body>
    <main>
      <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex justify-content-center py-4">
                  <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/pizza.png" alt="" />
                  </a>
                </div>
                <!-- End Logo -->

                <div class="card mb-3">
                  <div class="card-body">
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">Detail Product</h5>
                    </div>

                    <form method="post" name="detailproduct" action="editproduct.php"  class="row g-3 needs-validation" novalidate>
                    <div class="col-lg-12">
                      <span>  <img src= "pizza.png"></span>
                            <p class="tag-section"><strong>Product Name : </strong><a href="">BANANA</a></p>
                            <p>Description : Telslfdfldflsdlfldfdsflflsflsflsdlfldf</p>
                            <h6>Price : </h6>
                            <p>Qty: 16 <p>              
                        </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Edit</button>
                      </div>
                    </form>
                  </div>
                </div>

            
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>