<?php
$mainurl = "http://localhost/rooshabh/admin/";
$baseurl = "http://localhost/rooshabh/admin/assets/";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Admin Dashboard
  </title>


  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- bottstrap css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
  </script>



  <style>

    .add{
      width: 50px
      height: auto;
    }
    .NPC {
      display: none;
      <?php
      if ($NPC == 1) {
        echo "display: block;";
      }
      ?>

    }

/* css for add customers alert */
.CUSTO{
  display: none;

<?php
if ($CUSTO == 1) {

  echo "display: block;";
} else {


}
?>

}

.ACUSTO{
  display: none;

<?php
if ($ACUSTO == 1) {

  echo "display: block;";
} else {


}
?>

}

.CDD{
  display: none;

<?php
if ($CDD == 1) {

  echo "display: block;";
} else {


}
?>

}

    /* css for footer update alret page */
    .FF {
      display: none;

      <?php
      if ($FF == 1) {

        echo "display: block;";
      } else {


      }
      ?>


    }

    /* css for delete invoice alret page */
    .II {
      display: none;

      <?php
      if ($II == 1) {

        echo "display: block;";
      } else {


      }
      ?>


    }

    /* css for delete product alret page */
    .PPADD {
      display: none;

      <?php
      if ($PPADD == 1) {

        echo "display: block;";
      } else {


      }
      ?>


    }

    /* css for delete product alret page */
    .PPDD {
      display: none;

      <?php
      if ($PPDD == 1) {

        echo "display: block;";
      } else {


      }
      ?>


    }

    /* css for header upadte alret page */
    .HA {
      display: none;

      <?php
      if ($headeral == 1) {

        echo "display: block;";
      } else {


      }
      ?>


    }

    /* css for Banner upadte alret page */
    .BA {
      display: none;

      <?php
      if ($BA == 1) {

        echo "display: block;";
      } else {


      }
      ?>


    }

    /* css for About upadte alret page */
    .AB {
      display: none;

      <?php
      if ($AB == 1) {

        echo "display: block;";
      } else {


      }
      ?>


    }

    /* css for Add about point alret page */
    .AP {
      display: none;

      <?php
      if ($AP == 1) {

        echo "display: block;";
      } else {


      }
      ?>


    }

    /* css for Add about point alret page */
    .MX {
      display: none;

      <?php
      if ($MX == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    /* css for Add about point alret page */
    .AC {
      display: none;

      <?php
      if ($AC == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    .ACD {
      display: none;

      <?php
      if ($ACD == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    /* css for update cal to action img alret page */
    .CL {
      display: none;

      <?php
      if ($CL == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    /* css for add portfolio alret page */
    .POC {
      display: none;

      <?php
      if ($POC == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    .PCD {
      display: none;

      <?php
      if ($PCD == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    .PP {
      display: none;

      <?php
      if ($PP == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    .PPD {
      display: none;

      <?php
      if ($PPD == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }


    /* css for manage clients */
    .climg {
      height: 67px;
      width: 67px;

    }

    /* css for update Testimonials bg img alret page */
    .TT {
      display: none;

      <?php
      if ($TT == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    .TP {
      display: none;

      <?php
      if ($TP == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    .TPD {
      display: none;

      <?php
      if ($TPD == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }


    .hr {
      border: 2px solid black;

    }

    .SA {
      display: none;

      <?php
      if ($SA == 1) {

        echo "display: block;";
      } else {


      }
      ?>


    }

    /* css for about our team alret page */
    .OP {
      display: none;

      <?php
      if ($OP == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    .OPD {
      display: none;

      <?php
      if ($OPD == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    /* css for contact us Update alret page */
    .COU {
      display: none;

      <?php
      if ($COU == 1) {

        echo "display: block;";
      } else {


      }
      ?>
    }

    /* css for add create invoice input */
    .invoinput {
      border: 2px solid black;
      margin-bottom: 10px;
      width: 50%;


    }

    .invoinput::placeholder {
      color: black;
      font-weight: bold;
      font-size: 18px;
    }

    .content-invoice table th {
      color: black;
      font-weight: bolder;
    }


    /* add product modal */
    .modal-body {

      width: 700px;
    }


    /* add main product */
    .pimage {

      border: 2px solid black;
      font-size: 18px;
      font-weight: bolder;
      color: black;
      width: 50%;


    }

    .inpadd {
      margin-bottom: 10px;
    }

    /* manage product css */
    .pd {
      display: none;

      <?php
      if ($pdelete == 1) {
        echo "display: inline;";

      }
      ?>


    }

    /* change password css */
    .inputc {
      border: 2px solid black;
      width: 60%;
      margin-left: -499px;

    }

    .opass {
      <?php if ($OLPA == 1) {
        echo "border: 2px solid red;";
      } else {
        echo "border: 2px solid black;";
      } ?>
    }

    .opasst {
      float: left;
      color: red;
      <?php if ($OLPA == 1) {
        echo "display: block;";
      } else {
        echo "display: none;";
      } ?>


    }

    .cpass {
      <?php if ($CPA == 1) {
        echo "border: 2px solid red;";
      } else {
        echo "border: 2px solid black;";
      } ?>

    }

    .cpasst {

      margin-right: 490px;
      color: red;
      <?php if ($CPA == 1) {
        echo "display: block;";
      } else {
        echo "display: none;";
      } ?>


    }

    /* pie cart css */

    .pie-chart {
      background:
        radial-gradient(circle closest-side,
          white 0,
          white 27.72%,
          transparent 27.72%,
          transparent 84%,
          white 0),
        conic-gradient(from 180deg,
          #4e79a7 0,
          #4e79a7 38%,
          #f28e2c 0,
          #f28e2c 61%,
          #e15759 0,
          #e15759 77%,
          #76b7b2 0,
          #76b7b2 87%,
          #59a14f 0,
          #59a14f 93%,
          #edc949 0,
          #edc949 100%);
      position: relative;
      width: 500px;
      min-height: 350px;
      margin: 0;
      outline: 1px solid #ccc;
    }

    .pie-chart h2 {
      position: absolute;
      margin: 1rem;
    }

    .pie-chart cite {
      position: absolute;
      bottom: 0;
      font-size: 80%;
      padding: 1rem;
      color: gray;
    }

    .pie-chart figcaption {
      position: absolute;
      bottom: 1em;
      right: 1em;
      font-size: smaller;
      text-align: right;
    }

    .pie-chart span:after {
      display: inline-block;
      content: "";
      width: 0.8em;
      height: 0.8em;
      margin-left: 0.4em;
      height: 0.8em;
      border-radius: 0.2em;
      background: currentColor;
    }
  </style>

</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
        target="_blank">
        <img src="assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Rooshabh</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="<?php echo $mainurl; ?>admin-dashboard-pi">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>add-product">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Add Product</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>manage-product">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Manage Product</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>createinvoice">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Create invoice</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>manageinvoice">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Manage invoice</span>
          </a>
        </li>

        
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>managecustomers">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Manage Customers</span>
          </a>
        </li>



        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Manage Your Site</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>header">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Header</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>banner">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Banner</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>addservices">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Add Service</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>manageservices">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Manage Service</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>editabout">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Edit About </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>manageclients">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Manage Clients </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>calltoaction">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Call to Action </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>manageportfolio">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Manage Portfolio </span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>managetestimonials">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Manage testimonials</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>manageourteam">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Manage Our Team</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>updatecontactus">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Update Conatac US</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo $mainurl; ?>footer">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Footer</span>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-up.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li> -->
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
      data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">

          <h6 class="font-weight-bolder mb-0"></h6>
        </nav>

        <ul class="navbar-nav  justify-content-end">
          <?php if ($_SERVER["PATH_INFO"] == "/admin-dashboard-pi" || $_SERVER["PATH_INFO"] == "/admin-dashboard-line" || $_SERVER["PATH_INFO"] == "/admin-dashboard-bar") { ?>

            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Chart
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo $mainurl; ?>admin-dashboard-pi">Pi Chart</a>
                <a class="dropdown-item" href="<?php echo $mainurl; ?>admin-dashboard-line">Line Chart</a>
                <a class="dropdown-item" href="<?php echo $mainurl; ?>admin-dashboard-bar">Bar Chart</a>
              </div>
            </div>
          <?php } ?>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0">
              <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
            </a>
          </li>

          <li class="nav-item d-flex align-items-center">
            <a href="<?php echo $mainurl; ?>changepassword" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>

            </a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <!-- End Navbar -->