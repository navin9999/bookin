<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
      <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
      <meta name="author" content="PIXINVENT">
      <title>Bootstrap Tables - Frest - Bootstrap HTML admin template</title>
      <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
      <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
      <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
      <!-- BEGIN: Vendor CSS-->
      <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
     
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->
   </head>
   <style type="text/css">
    
   </style>
   <!-- END: Head-->
   <!-- BEGIN: Body-->
   <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
      <!-- BEGIN: Header-->
      <div class="header-navbar-shadow"></div>
      <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top  border-bottom ">
         <div class="navbar-wrapper">
            <div class="navbar-container content">
               <div class="navbar-collapse" id="navbar-mobile">
                  <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                     <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs " href="#"><i class="ficon bx bx-menu"></i></a></li>
                        </ul>
                  </div>
                  <ul class="nav navbar-nav float-right">
                     <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                     <li class="nav-item nav-search">
                        <a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                        <div class="search-input">
                           <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                           <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                           <div class="search-input-close"><i class="bx bx-x"></i></div>
                           <ul class="search-list"></ul>
                        </div>
                     </li>
                     <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                           <div class="user-nav d-sm-flex d-none"><span class="user-name">John Doe</span><span class="user-status text-muted">Available</span></div>
                           <span><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                           <a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                           <div class="dropdown-divider mb-0"></div>
                           <a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
     
      <!-- END: Header-->
      <!-- BEGIN: Main Menu-->
      <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
         <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
               <li class="nav-item mr-auto">
                  <a class="navbar-brand" href="/">
                     <div class="brand-logo"><img class="logo" src="../../../app-assets/images/logo/logo.png" /></div>
                     <h2 class="brand-text mb-0">Frest</h2>
                  </a>
               </li>
               <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="bx-disc"></i></a></li>
            </ul>
         </div>
         <div class="shadow-bottom"></div>
         <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">
             
                <li class=" nav-item"><a href="/"><i class="bx bx-home-alt"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
               </li>
               <li class=" navigation-header"><span>Apps</span>
               </li>
              
               <li class=" nav-item">
                  <a href="#"><i class="bx bx-file"></i><span class="menu-title" data-i18n="Invoice">CATEGORY</span></a>
                  <ul class="menu-content">
                     <li><a href="/admin_cat_add"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Category Add</span></a>
                     </li>
                   
                     <li><a href="/admin_cat_list"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">Category List</span></a>
                     </li>
                     <li><a href="/admin_sub_cat_add"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Sub Category Add</span></a>
                     </li>
                   
                     <li><a href="/admin_sub_cat_list"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">Sub Category List</span></a>
                     </li>

                     <li><a href="/admin_cat_child_add"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Child Sub Category Add</span></a>
                     </li>
                   
                     <li><a href="/admin_cat_child_list"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">Child Category List</span></a>
                     </li>
                    
                  </ul>
               </li>
                <li class=" nav-item">
                  <a href="#"><i class="bx bx-file"></i><span class="menu-title" data-i18n="Invoice">PRODUCT</span></a>
                  <ul class="menu-content">
                     <li><a href="/admin_product_add"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">Product Add</span></a>
                     </li>
                   
                     <li><a href="/admin_product_list"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Invoice Edit">Product List</span></a>
                     </li>
                    
                    
                  </ul>
               </li>
               <li class="disabled nav-item"><a href="#"><i class="bx bx-unlink"></i><span class="menu-title" data-i18n="Disabled Menu">Disabled Menu</span></a>
               </li>
               <li class=" navigation-header"><span>Support</span>
               </li>
            </ul>
         </div>
      </div>
      <!-- END: Main Menu-->
      @yield('content')
      <!-- demo chat-->
      <div class="widget-chat-demo">
         <!-- widget chat demo footer button start -->
         <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo" data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
         <!-- widget chat demo footer button ends -->
         <!-- widget chat demo start -->
         <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
               <div class="card-header border-bottom p-0">
                  <div class="media m-75">
                     <a href="JavaScript:void(0);">
                        <div class="avatar mr-75">
                           <img src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32" height="32">
                           <span class="avatar-status-online"></span>
                        </div>
                     </a>
                     <div class="media-body">
                        <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
                        <span class="text-muted font-small-3">Active</span>
                     </div>
                     <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                  </div>
               </div>
               <div class="card-body widget-chat-container widget-chat-demo-scroll">
                  <div class="chat-content">
                     <div class="badge badge-pill badge-light-secondary my-1">today</div>
                     <div class="chat">
                        <div class="chat-body">
                           <div class="chat-message">
                              <p>How can we help? 😄</p>
                              <span class="chat-time">7:45 AM</span>
                           </div>
                        </div>
                     </div>
                     <div class="chat chat-left">
                        <div class="chat-body">
                           <div class="chat-message">
                              <p>Hey John, I am looking for the best admin template.</p>
                              <p>Could you please help me to find it out? 🤔</p>
                              <span class="chat-time">7:50 AM</span>
                           </div>
                        </div>
                     </div>
                     <div class="chat">
                        <div class="chat-body">
                           <div class="chat-message">
                              <p>Stack admin is the responsive bootstrap 4 admin template.</p>
                              <span class="chat-time">8:01 AM</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card-footer border-top p-1">
                  <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                     <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
                     <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                  </form>
               </div>
            </div>
         </div>
         <!-- widget chat demo ends -->
      </div>
      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>
      <!-- BEGIN: Footer-->
      <footer class="footer footer-static footer-light">
         <p class="clearfix mb-0"><span class="float-left d-inline-block">2020 &copy; PIXINVENT</span><span class="float-right d-sm-inline-block d-none">Crafted with<i class="bx bxs-heart pink mx-50 font-small-3"></i>by<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
         </p>
      </footer>
      <!-- END: Footer-->
      <!-- BEGIN: Vendor JS-->
      <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
      <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
      <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
      <script src="../../../app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
      <!-- BEGIN Vendor JS-->
      <!-- BEGIN: Page Vendor JS-->

      <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
     <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
      <!-- END: Page Vendor JS-->
       <!-- BEGIN: Page Vendor JS-->
   
    <script src="../../../app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

       <!-- BEGIN: Page Vendor JS-->
       <script src="../../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <!-- END: Page Vendor JS-->
      <!-- BEGIN: Theme JS-->
      <script src="../../../app-assets/js/core/app-menu.js"></script>
      <script src="../../../app-assets/js/core/app.js"></script>
      <script src="../../../app-assets/js/scripts/components.js"></script>
      <script src="../../../app-assets/js/scripts/footer.js"></script>
      <!-- END: Theme JS-->
     <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->
      <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/forms/validation/form-validation.js"></script>
    <!-- END: Page JS-->
     <!-- BEGIN: Page JS-->
     <script src="//cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

    <!-- END: Page JS-->
   </body>
   <!-- END: Body-->
</html>