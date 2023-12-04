<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo_1/style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
  </head>
    <body>
        <div class="container-scroller">
                @include('layouts.navbar')

            <div class="container-fluid page-body-wrapper">
                @include('layouts.sidebar')

                                            <!-- partial -->
                    <div class="main-panel">
                        @yield('student-form')
                      
                        <!-- content-wrapper ends -->
                        <!-- partial:../../partials/_footer.html -->
                                 @include('layouts.footer')
                            <!-- partial -->
                </div>
                <!-- main-panel ends -->



            </div>
            <!-- page-body-wrapper ends -->


        </div>
        <!-- container-scroller -->

    </body>
    @include('layouts.script')
</html>

