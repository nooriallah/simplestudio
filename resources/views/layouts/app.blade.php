<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Simple Dashboard</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="/backend/images/favicon.png">
    <link href="/backend/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/backend/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/backend/vendor/nouislider/nouislider.min.css">

    <!-- Style css -->
    <link href="/backend/css/style.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="prel oader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
                    <defs>
                    </defs>
                </svg>
                <div class="brand-title">
                    <h2 class="">Simple studio.</h2>
                    <span class="brand-sub-title">@Noorullah</span>
                </div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->



        <!--**********************************
            Header start
        ***********************************-->
        @include("components.backend.navigation")
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->



        <!--**********************************
            Sidebar start
        ***********************************-->
        @include("components.backend.sidebar")
        <!--**********************************
            Sidebar end
        ***********************************-->


        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">

                    {{ $slot }}

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

    </div>
    {{-- Main end --}}

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/backend/vendor/global/global.min.js"></script>
    <script src="/backend/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Dashboard 1 -->
    <script src="/backend/js/dashboard/dashboard-1.js"></script>


    <script src="/backend/js/custom.min.js"></script>
    <script src="/backend/js/dlabnav-init.js"></script>
    <script src="/backend/js/demo.js"></script>
    <script src="/backend/js/styleSwitcher.js"></script>

    {{-- Livewire scripts  --}}
    @livewireScripts
</body>

</html>
