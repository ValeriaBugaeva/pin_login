
<!DOCTYPE html>


<html lang="en" data-textdirection="ltr" class="dark-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="csrf-token" content="QieW5GwvYKk9kQrBWwWYLL4axBim4sQ00vONfH5x">

  <title> - Time Clock</title>
  <link rel="shortcut icon" type="image/x-icon" href="http://167.99.250.153/images/logo/favicon.ico">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

  
  <link rel="stylesheet" href="http://167.99.250.153/vendors/css/vendors.min.css" />
<link rel="stylesheet" href="http://167.99.250.153/vendors/css/ui/prism.min.css" />

  <!-- vendor css files -->
  <link rel="stylesheet" href="http://167.99.250.153/vendors/css/extensions/toastr.min.css">


<link rel="stylesheet" href="http://167.99.250.153/css/core.css" />




<link rel="stylesheet" href="http://167.99.250.153/css/base/core/menu/menu-types/vertical-menu.css" />
<!-- <link rel="stylesheet" href="http://167.99.250.153/css/base/core/colors/palette-gradient.css"> -->


  
  <link rel="stylesheet" href="http://167.99.250.153/css/base/pages/page-profile.css">
  <link rel="stylesheet" href="http://167.99.250.153/css/base/plugins/extensions/ext-component-toastr.css">


<link rel="stylesheet" href="http://167.99.250.153/css/overrides.css" />





<link rel="stylesheet" href="http://167.99.250.153/css/style.css" />
<link rel="stylesheet" href="http://167.99.250.153/css/style-rtl.css" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="{{ asset("fontawesome/css/all.min.css") }}">

</head>





<body class="vertical-layout vertical-menu-modern 1-column
 
navbar-floating
menu-expanded footer-static" data-menu="vertical-menu-modern" data-col="1-column" data-layout="dark-layout" style="" data-framework="laravel" data-asset-path="http://167.99.250.153/">

  
  
  
  <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow ">
    
    <div class="navbar-container d-flex content">
      <div class="bookmark-wrapper d-flex align-items-center">
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link nav-link-style">
            <div class="msg-date">21/04/2021 - 09:57</div>
            </a>
          </li>
        </ul>
      </div>

      <ul class="nav navbar-nav align-items-center ml-auto">
        <li class="nav-item dropdown dropdown-language">
          <a class="nav-link dropdown-toggle" id="dropdown-flag" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="flag-icon flag-icon-us"></i>
            <span class="selected-language">English</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-flag">
            <a class="dropdown-item" href="http://167.99.250.153/lang/en" data-language="en">
              <i class="flag-icon flag-icon-us"></i> English
            </a>
            <a class="dropdown-item" href="http://167.99.250.153/lang/fr" data-language="fr">
              <i class="flag-icon flag-icon-fr"></i> French
            </a>
            <a class="dropdown-item" href="http://167.99.250.153/lang/de" data-language="de">
              <i class="flag-icon flag-icon-de"></i> German
            </a>
            <a class="dropdown-item" href="http://167.99.250.153/lang/pt" data-language="pt">
              <i class="flag-icon flag-icon-pt"></i> Portuguese
            </a>
          </div>
        </li>
      
      </ul>
      </div>
    </div>
  </nav>

 
  <!-- END: Header-->

  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

        <div class="content-wrapper ">
      
            <div class="content-header row">
  <div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h2 class="content-header-title float-left mb-0"></h2>
        <div class="breadcrumb-wrapper">
                  </div>
      </div>
    </div>
  </div>
</div>
      
      <div class="content-body">
        
          <!-- for mobile device -->
<div class="text-center mb-3 d-xl-none d-lg-none">
  <h1 class="display-5">21/04/2021</h1>
  <h1 class="display-2">09:57</h1>
  <button type="button" class="btn btn-relief-success btn-lg mb-2" >
    <i data-feather="play" class="mr-25"></i>
    <span>Star Shift</span>
  </button>
</div>
<!-- for mobile device -->

<!-- for desktop and tablet device -->
<div class="text-center mb-3 d-none d-lg-block">
  <h1 class="display-3">21/04/2021</h1>
  <h1 class="display-1">09:57</h1>
  <button type="button" class="btn btn-relief-success btn-lg mb-7" >
    <i data-feather="play" class="mr-25"></i>
    <span>Star Shift</span>
  </button>
</div>
<!-- for desktop and tablet device -->

<button style="background-color: inherit; border: none; margin-left: auto; margin-right: auto; margin-top: 2rem; width: 100%;"> <i class="fas fa-play-circle fa-10x" style="color: #23b24e;"></i> </button>

      </div>
    </div>
    
  </div>
  <!-- End: Content-->

  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <div class="toast hide top-0 end-0 position-fixed" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <i class="fas fa-check-circle fa-2x" style="color: green;"></i> &nbsp; &nbsp;
      <strong class="me-auto"> Welcome User! </strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      You have successfully logged in. Now you can start to explore!
    </div>
  </div>

  
  <!-- BEGIN: Footer-->
<footer class="footer  footer-light">
  <p class="clearfix mb-0">
    <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; <script>document.write(new Date().getFullYear())</script><a class="ml-25" href="https://solutionweb.io" target="_blank">SolutionWeb.io</a>
      <span class="d-none d-sm-inline-block">, All rights Reserved</span>
    </span>
    <span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span>
  </p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->

  
  <script src="http://167.99.250.153/vendors/js/vendors.min.js"></script>
<script src="http://167.99.250.153/vendors/js/ui/prism.min.js"></script>
  <!-- vendor files -->
  <script src="http://167.99.250.153/vendors/js/extensions/toastr.min.js"></script>

<script src="http://167.99.250.153/js/core/app-menu.js"></script>
<script src="http://167.99.250.153/js/core/app.js"></script>
<script src="http://167.99.250.153/js/scripts/customizer.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>



  <script type="text/javascript">
    $(window).on('load', function() {
      if (feather) {
        feather.replace({
          width: 14
          , height: 14
        });
      }

      $('.toast').toast('show');
    })

  </script>
</body>

</html>
