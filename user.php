<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php
session_start();
if (empty($_SESSION['nik'])) { ?>
  <script type="text/javascript">
    alert('Maaf Anda Belum Melakukan Login')
    window.location.assign('index.php')
  </script>
<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Peduli Diri
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/58d8100cb7.js" crossorigin="anonymous"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <div class="navbar-brand m-0">
        <h5 class="font-weight-bolder">Peduli Diri</h5>
      </div>
    </div>
    <div class="collapse navbar-collapse w-auto max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="user.php" id="dashboard">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background opacity-6" d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                        <path class="color-background" d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="?url=tulis_catatan" id="tulis_catatan">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12px" height="12px">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background " d="M362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32zM421.7 220.3L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3z" />
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Tulis Perjalanan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?url=catatan_perjalanan" id="catatan_perjalanan">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12px" height="12px">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background " d="M448 336v-288C448 21.49 426.5 0 400 0H96C42.98 0 0 42.98 0 96v320c0 53.02 42.98 96 96 96h320c17.67 0 32-14.33 32-31.1c0-11.72-6.607-21.52-16-27.1v-81.36C441.8 362.8 448 350.2 448 336zM143.1 128h192C344.8 128 352 135.2 352 144C352 152.8 344.8 160 336 160H143.1C135.2 160 128 152.8 128 144C128 135.2 135.2 128 143.1 128zM143.1 192h192C344.8 192 352 199.2 352 208C352 216.8 344.8 224 336 224H143.1C135.2 224 128 216.8 128 208C128 199.2 135.2 192 143.1 192zM384 448H96c-17.67 0-32-14.33-32-32c0-17.67 14.33-32 32-32h288V448z" />
                      </g>
                    </g>
                  </g>
                </g>
              </svg>



            </div>
            <span class="nav-link-text ms-1">Catatan Perjalanan</span>
          </a>
        </li>


        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Tentang Akun</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="logout.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="12px" height="12px">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(0.000000, 148.000000)">
                        <path class="color-background " d="M96 480h64C177.7 480 192 465.7 192 448S177.7 416 160 416H96c-17.67 0-32-14.33-32-32V128c0-17.67 14.33-32 32-32h64C177.7 96 192 81.67 192 64S177.7 32 160 32H96C42.98 32 0 74.98 0 128v256C0 437 42.98 480 96 480zM504.8 238.5l-144.1-136c-6.975-6.578-17.2-8.375-26-4.594c-8.803 3.797-14.51 12.47-14.51 22.05l-.0918 72l-128-.001c-17.69 0-32.02 14.33-32.02 32v64c0 17.67 14.34 32 32.02 32l128 .001l.0918 71.1c0 9.578 5.707 18.25 14.51 22.05c8.803 3.781 19.03 1.984 26-4.594l144.1-136C514.4 264.4 514.4 247.6 504.8 238.5z" />
              </svg>
            </div>
            </g>
            </g>
            </g>
            </g>
            </svg>

            <span class="nav-link-text ms-1">Keluar</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Dukung Kami</h6>
        </li>

        <li class="nav-item">
          <a href="https://saweria.co/afrizal0" class="nav-link" target="_blank">
            <button type="button" class="btn btn-outline-info btn-block">😊 Sawer</button>
          </a>
        </li>
      </ul>

    </div>
  </aside>
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <div class="container-fluid">
      <div class="row ">
        <div class="col-12 mt-4 ">


          <?php
          if (!empty(@$_GET['url'])) { ?>
            <div class="card mb-4  ">

              <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-relative w-100 z-index-1 my-4">
                <div class="collapse navbar-collapse me-md-0 me-sm-4 " id="navbar">
                  <ul class="navbar-nav justify-content-start">
                    <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                      <a href="javascript:;" class="nav-link text-white p-0">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                          <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-dark"></i>
                            <i class="sidenav-toggler-line bg-dark"></i>
                            <i class="sidenav-toggler-line bg-dark"></i>
                          </div>
                        </a>
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>


              <?php
              switch (@$_GET['url']) {

                case 'tulis_catatan':
                  include 'tulis_catatan.php'; ?>
                  <script>
                    document.getElementById('tulis_catatan').classList.add('active')
                    document.getElementById('dashboard').classList.remove('active')
                  </script>
                <?php
                  break;

                case 'catatan_perjalanan':
                  include 'catatan_perjalanan.php'; ?>
                  <script>
                    document.getElementById('catatan_perjalanan').classList.add('active')
                    document.getElementById('dashboard').classList.remove('active')
                  </script>
                <?php
                  break;

                case 'edit_catatan':
                  include 'edit_catatan.php'; ?>
                  <script>
                    document.getElementById('dashboard').classList.remove('active')
                  </script> <?php
                            break;

                          default:
                            ?>
                  <script type="text/javascript">
                    window.location.assign('error.php');
                  </script><?php
                            break;
                        }
                            ?>
            </div>
        </div> <?php
              } else {                  ?>

        <div class="page-header min-height-300 border-radius-xl ">

          <div class="mask bg-info">
            <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-relative w-100 z-index-1 mt-4 mb-5">
              <div class="collapse navbar-collapse me-md-0 me-sm-4 " id="navbar">
                <ul class="navbar-nav justify-content-start">
                  <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0">
                      <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                          <i class="sidenav-toggler-line bg-dark"></i>
                          <i class="sidenav-toggler-line bg-dark"></i>
                          <i class="sidenav-toggler-line bg-dark"></i>
                        </div>
                      </a>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>


            <div class="container-fluid font-weight-bold text-md opacity-none mt-4 ">
              <?php
                echo "<h3>Selamat Datang.</h3>";
                echo "<h6>Ayo, catat perjalanan Anda di website.</h6>";
              ?>
            </div>
          </div>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
          <div class="row gx-4">
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative">
                <img src="assets/img/default_pictures.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              </div>
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1">
                  <?php
                  echo $_SESSION['nama_lengkap'];
                  ?>
                </h5>
                <p class="mb-0 font-weight-bold text-sm">
                  <?php
                  echo $_SESSION['nik'];
                  ?>
                </p>
              </div>
            </div>

          </div>
        </div>
      <?php } ?>
      </div>

      <!-- Foooter -->
      <div class="container-fluid py-4">
        <footer class="footer pt-3  ">
          <div class="container-fluid">
            <div class="copyright text-muted col-8 mx-auto text-center mt-5">
              <em>
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with ❤️ by
                <a href="https://github.com/afrizal0" class="font-weight-bold" target="_blank">afrizal</a>
              </em>
            </div>
          </div>
        </footer>
      </div>

      <!--   Core JS Files   -->
      <script src="assets/js/core/popper.min.js"></script>
      <script src="assets/js/core/bootstrap.min.js"></script>
      <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
      <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
      <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
          var options = {
            damping: '0.5'
          }
          Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
      </script>
      <!-- Github buttons -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
      <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>

      <script type="text/javascript" src="assets/js/jquery-3.5.1.js"></script>
      <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="assets/js/dataTables.bootstrap4.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function() {
          $('#example').DataTable();
        });
      </script>
</body>

</html>