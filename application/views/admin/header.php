
<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gbagada General Hospital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url("assets/assets/vendor/bootstrap/css/bootstrap.min.css")?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= base_url("assets/assets/vendor/font-awesome/css/font-awesome.min.css")?>">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?= base_url("assets/assets/css/fontastic.css")?>">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url("assets/assets/css/style.default.premium.css")?>" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url("assets/assets/css/custom.css")?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-3/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


    <style>
    input[type="text"]{
      border-radius:5px;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
    }
     input[type="number"]{
      border-radius:5px;
      -moz-border-radius:5px;
      -webkit-border-radius:5px;
    }
    #formRight select {
         /*background: none repeat scroll 0 0 #FFFFFF;*/
         /*border: 1px solid #E5E5E5;*/
         border-radius: 13px 13px 13px 13px;
         /*box-shadow: 0 0 10px #E8E8E8 inset;*/
         height: 45px;
         margin: 1 1 1 25px;
         padding: 10px;
         width: 110px;
     }
</style>
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            // Search Holder for search
            <form id="searchForm" action="<?base_url("search")?>" method="POST" role="search">
              <input type="search" placeholder="Search a patient" name="searchkey" class="form-control">
            </form>

          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">

                <!-- Navbar Brand --><a href="<?=site_url("admin/index")?>" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Gbadaga</span><strong>General Hospital</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>GGH</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>

              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href=""><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner"></span></a>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner"></span></a>
        
                <!-- Logout    -->
                <li class="nav-item"><a href="<?= site_url("Login/logout")?>" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
