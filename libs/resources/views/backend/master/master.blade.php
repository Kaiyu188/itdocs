<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{asset('public/layout/backend')}}/">
    <title>ITDOCSVN - @yield('title') </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <script src="https://cdn.tiny.cloud/1/ort9geiqy6wua9wcvb6q9fk95ezn6y82evof4hpgnxyxwat4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <link rel="icon" href="files\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap\css\bootstrap.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\feather\css\feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="files\assets\css\jquery.mCustomScrollbar.css">
    <!-- material icon -->
    {{-- <link rel="stylesheet" type="text/css" href="files\assets\icon\material-design\css\material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\advance-elements\css\bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap-daterangepicker\css\daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\datedropper\css\datedropper.min.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\spectrum\css\spectrum.css">
    <!-- typicon icon -->
    <link href="files\assets\icon\typicons-icons\css\typicons.min.css" rel="stylesheet">
    <!-- themify-icons line icon -->
    <link href="files\assets\icon\themify-icons\themify-icons.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="files\assets\icon\font-awesome\css\font-awesome.min.css" rel="stylesheet">
    <!-- ico font -->
    <link href="files\assets\icon\icofont\css\icofont.css" rel="stylesheet">
    <!-- ion icon css -->
    <link rel="stylesheet" type="text/css" href="files\assets\icon\ion-icon\css\ionicons.min.css">
    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\animate.css\css\animate.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="files\assets\pages\flag-icon\flag-icon.min.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="files\assets\pages\menu-search\css\component.css">
    <!-- feather Awesome -->
    <link href="files\assets\icon\feather\css\feather.css" rel="stylesheet">
    <!-- Data table css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\data-table\extensions\responsive\css\responsive.dataTables.css">
    <!-- Switch component css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\switchery\css\switchery.min.css">
    <!-- Tags css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap-tagsinput\css\bootstrap-tagsinput.css">
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\bootstrap-multiselect\css\bootstrap-multiselect.css">
    <link rel="stylesheet" type="text/css" href="files\bower_components\multiselect\css\multi-select.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\j-pro\css\j-forms.css">
    <!-- Mini-color css -->
    <link rel="stylesheet" type="text/css" href="files\bower_components\jquery-minicolors\css\jquery.minicolors.css">
    <!--forms-wizard css-->
    <link rel="stylesheet" type="text/css" href="files\bower_components\jquery.steps\css\jquery.steps.css">

    <!-- Upload Image -->
    <link rel="stylesheet" href="files\assets\css\fine-uploader-new.css" type="text/css">
    <link rel="stylesheet" href="files\assets\css\dropzone.css" type="text/css">
    <!-- Tour Js -->
    <link rel="stylesheet" href="files\enjoyhint\enjoyhint.css" type="text/css">
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="files\assets\pages\j-pro\css\demo.css">
    <link rel="stylesheet" type="text/css" href="files\assets\pages\j-pro\css\font-awesome.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files\assets\css\newStyle.css">
    <!-- Sweetalert.css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">  --}}
</head>

<body>
    <!-- Pre-loader start -->
    @include('backend.load.preloader')
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="{{ asset('admin/home')}}#">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="{{ asset('admin/home') }}">
                            <img class="img-fluid" src="files\assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="{{ asset('admin/home')}}#" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>{{ Auth::user()->name }}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('logout') }}">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Content -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <!-- Menu bar -->
                    @include('backend.menu.menu')
                    <!-- Menu bar end -->

                    <!-- Body -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    @yield('main')

                                </div>

                                {{-- <div id="styleSelector">  --}}
                            </div>
                        </div>
                    </div>
                    <!-- Body end -->
                </div>
            </div>
            <!-- Content end -->
        </div>
    </div>

    <!-- Required Jquery -->
    {{-- <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>  --}}
    {{--  <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script>  --}}
    <script type="text/javascript" src="files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- data-table js -->
    {{-- <script type='text/javascript' src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
    <script src="files\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
    <script src="files\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
    <script src="files\assets\pages\data-table\js\jszip.min.js"></script>
    <script src="files\assets\pages\data-table\js\pdfmake.min.js"></script>
    <script src="files\assets\pages\data-table\js\vfs_fonts.js"></script>
    <script src="files\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
    <script src="files\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
    <script src="files\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>  --}}
    <!-- modernizr js -->
    <script type="text/javascript" src="files\bower_components\modernizr\js\modernizr.js"></script>
    {{-- <script type="text/javascript" src="files\bower_components\modernizr\js\css-scrollbars.js"></script>  --}}
    <!-- Chart js -->
    <script type="text/javascript" src="files\bower_components\chart.js\js\Chart.js"></script>
    <!-- Switch component js -->
    {{-- <script type="text/javascript" src="files\bower_components\switchery\js\switchery.min.js"></script>  --}}
    <!-- amchart js -->
    <script src="files\assets\pages\widget\amchart\amcharts.js"></script>
    <script src="files\assets\pages\widget\amchart\serial.js"></script>
    <script src="files\assets\pages\widget\amchart\light.js"></script>
    <script src="files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="files\assets\js\SmoothScroll.js"></script>
    <script src="files\assets\js\pcoded.min.js"></script>
    <!-- i18next.min.js -->
    {{-- <script type="text/javascript" src="files\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="files\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="files\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="files\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>  --}}
    <!--Forms - Wizard js-->
    {{-- <script src="files\bower_components\jquery.cookie\js\jquery.cookie.js"></script>
    <script src="files\bower_components\jquery.steps\js\jquery.steps.js"></script>
    <script src="files\bower_components\jquery-validation\js\jquery.validate.js"></script>  --}}
    <!-- Validation js -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="files\assets\pages\form-validation\validate.js"></script>  --}}
    <!-- Bootstrap date-time-picker js -->
    {{-- <script type="text/javascript" src="files\assets\pages\advance-elements\moment-with-locales.min.js"></script>
    <script type="text/javascript" src="files\bower_components\bootstrap-datepicker\js\bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="files\assets\pages\advance-elements\bootstrap-datetimepicker.min.js"></script>  --}}
    <!-- Date-range picker js -->
    {{-- <script type="text/javascript" src="files\bower_components\bootstrap-daterangepicker\js\daterangepicker.js"></script>  --}}
    <!-- Date-dropper js -->
    {{-- <script type="text/javascript" src="files\bower_components\datedropper\js\datedropper.min.js"></script>  --}}
    <!-- Color picker js -->
    {{-- <script type="text/javascript" src="files\bower_components\spectrum\js\spectrum.js"></script>
    <script type="text/javascript" src="files\bower_components\jscolor\js\jscolor.js"></script>  --}}
    <!-- Mini-color js -->
    {{-- <script type="text/javascript" src="files\bower_components\jquery-minicolors\js\jquery.minicolors.min.js"></script>  --}}
    <!-- Tags js -->
    {{-- <script type="text/javascript" src="files\bower_components\bootstrap-tagsinput\js\bootstrap-tagsinput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>  --}}
    <!-- Max-length js -->
    {{-- <script type="text/javascript" src="files\bower_components\bootstrap-maxlength\js\bootstrap-maxlength.js"></script>  --}}
    <!-- Accordion js -->
    {{-- <script type="text/javascript" src="files\assets\pages\accordion\accordion.js"></script>  --}}
    <!-- ace editor js -->
    {{-- <script type="text/javascript" src="files\assets\pages\ace-editor\build\aui\aui.js"></script>  --}}
    <!-- gauge js -->
    {{-- <script src="files\assets\pages\widget\gauge\gauge.min.js"></script>
    <script src="files\assets\pages\widget\amchart\gauge.js"></script>
    <script src="files\assets\pages\widget\amchart\pie.js"></script>  --}}
    <!-- Select 2 js -->
    {{-- <script type="text/javascript" src="files\bower_components\select2\js\select2.full.min.js"></script>  --}}
    <!-- Multiselect js -->
    {{-- <script type="text/javascript" src="files\bower_components\bootstrap-multiselect\js\bootstrap-multiselect.js"></script>
    <script type="text/javascript" src="files\bower_components\multiselect\js\jquery.multi-select.js"></script>
    <script type="text/javascript" src="files\assets\js\jquery.quicksearch.js"></script>  --}}
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <!-- jquery sortable js -->
    {{-- <script type="text/javascript" src="files\bower_components\Sortable\js\Sortable.js"></script>  --}}
    <!-- sweet alert js -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>  --}}
    <!-- Upload Image -->
    {{-- <script src="files\assets\js\component\s3.fine-uploader.js"></script>
    <script src="files\assets\js\component\dropzone.js"></script>  --}}
    <!-- Tour js -->
    {{-- <script src="files\enjoyhint\enjoyhint.min.js"></script>  --}}
    <!-- Calendar custom js -->
    {{-- <script src="files\assets\js\component\calendar.js"></script>  --}}
    <!-- Shortcuts custom js -->
    {{-- <script src="files\assets\js\shortcuts.js"></script>  --}}
    <!-- Format Number custom js -->
    {{-- <script src="files\assets\js\component\numberFormat.js"></script>  --}}
    <!-- j-pro js -->
    {{-- <script type="text/javascript" src="files\assets\pages\j-pro\js\jquery.ui.min.js"></script>
    <script type="text/javascript" src="files\assets\pages\j-pro\js\jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="files\assets\pages\j-pro\js\jquery-cloneya.min.js"></script>
    <script type="text/javascript" src="files\assets\pages\j-pro\js\autoNumeric.js"></script>
    <script type="text/javascript" src="files\assets\pages\j-pro\js\jquery.stepper.min.js"></script>  --}}
    <!-- custom js -->
    {{-- <script type="text/javascript" src="files\assets\pages\j-pro\js\custom\currency-form.js"></script>  --}}
    {{-- <script type="text/javascript" src="files\assets\pages\advance-elements\swithces.js"></script>  --}}
    {{-- <script src="files\assets\js\component\shared.js"></script>  --}}
    {{-- <script type="text/javascript" src="files\assets\pages\advance-elements\select2-custom.js"></script>  --}}
    {{-- <script type="text/javascript" src="files\assets\js\script.js"></script>  --}}
    {{-- <script type="text/javascript" src="files\assets\pages\advance-elements\custom-picker.js"></script>  --}}
    {{-- <script src="files\assets\pages\forms-wizard-validation\form-wizard.js"></script>  --}}
    {{-- <script src="files\assets\pages\chart\c3\c3-custom-chart.js"></script>  --}}
    <script src="files\assets\js\vartical-layout.min.js"></script>
    <script type="text/javascript" src="files\assets\pages\dashboard\custom-dashboard.js"></script>
    <script type="text/javascript" src="files\assets\js\script.min.js"></script>
    {{-- <script type="text/javascript" src="files\assets\pages\notify\notify.js"></script>  --}}
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
    @stack('scripts')
</body>

</html>
