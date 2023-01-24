 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="utf-8" />
     <title>Seat Plan Project</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
     <meta content="Coderthemes" name="author" />
     <!-- App favicon -->
     <link rel="shortcut icon" href="assets/images/favicon.ico">

     <!-- third party css -->
     <link href="assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
     <!-- third party css end -->

     <!-- App css -->
     <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

     <style>
         img.img-fluid {
             height: 90px;
         }

         .rounded-1 {
             border: 1px solid;
         }
     </style>

 </head>

 <body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid"
     data-rightbar-onstart="true">
     <!-- Begin page -->
     <div class="wrapper">




         @yield('content')


     


     </div>

     <div class="rightbar-overlay"></div>
     <!-- /End-bar -->

     <!-- bundle -->
     <script src="assets/js/vendor.min.js"></script>
     <script src="assets/js/app.min.js"></script>

     <!-- third party js -->
     <script src="assets/js/vendor/apexcharts.min.js"></script>
     <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
     <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
     <!-- third party js ends -->

     <!-- demo app -->
     <script src="assets/js/pages/demo.dashboard.js"></script>

     <script src="assets/js/vendor/handlebars.min.js"></script>
     <script src="assets/js/vendor/typeahead.bundle.min.js"></script>

     <!-- Demo -->
     <script src="assets/js/pages/demo.typehead.js"></script>

     <!-- Timepicker -->
     <script src="assets/js/pages/demo.timepicker.js"></script>
     <!-- end demo js-->
 </body>


 </html>
